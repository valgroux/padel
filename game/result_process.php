<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=padel;', 'root', 'root');

// Requête pour récupérer la liste des joueurs
$query = "SELECT * FROM users";
$result = $bdd->query($query);
$players = $result->fetchAll(PDO::FETCH_ASSOC);

// Traitement du formulaire de création de match
if (isset($_POST['create_match_submit'])) {
    $player1 = $_POST['player1'];
    $player2 = $_POST['player2'];
    $player3 = $_POST['player3'];
    $player4 = $_POST['player4'];
    $winningTeam = $_POST['winning_team'];

    // Mettre à jour les données des joueurs
    $updatePlayerQuery = "UPDATE users SET numbers_games = numbers_games + 1";
    $updatePlayerQuery .= ", games_win = CASE WHEN id = :player1 OR id = :player2 THEN games_win + 1 ELSE games_win END";
    $updatePlayerQuery .= ", games_loose = CASE WHEN id = :player1 OR id = :player2 THEN games_loose ELSE games_loose + 1 END";
    $updatePlayerQuery .= " WHERE id IN (:player1, :player2, :player3, :player4)";

    $stmt = $bdd->prepare($updatePlayerQuery);
    $stmt->bindParam(':player1', $player1);
    $stmt->bindParam(':player2', $player2);
    $stmt->bindParam(':player3', $player3);
    $stmt->bindParam(':player4', $player4);
    $stmt->execute();

    header('Location: tableau-de-bord.php');
    exit();
}
?>