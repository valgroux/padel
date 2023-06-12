<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=padel;', 'root', 'root');

// Requête pour récupérer les données des utilisateurs triées par coefficient dans l'ordre décroissant
$query = "SELECT *, games_win / numbers_games AS coefficient FROM users ORDER BY coefficient DESC";
$result = $bdd->query($query);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classement des joueurs</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/variables.css">
    <link rel="stylesheet" href="./style/tableau-de-bord.css">
</head>

<body>
    <div class="container">
        <div class="top">
            <div class="top__left">
                <h1>Bonjour <span><?php echo $_SESSION['pseudo']?></span> 👋</h1>
            </div>
            <div class="top__right">
                <button onclick="location.href='information_game.php'">Entrez le résultat d'un match</button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Classement</th>
                    <th>Pseudo</th>
                    <th>Nombre de match</th>
                    <th>Gagné</th>
                    <th>Perdu</th>
                    <th>Coefficient victoire</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $classement = 1;
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $classement . '</td>';
                    echo '<td>' . $row['pseudo'] . '</td>';
                    echo '<td>' . $row['numbers_games'] . '</td>';
                    echo '<td>' . $row['games_win'] . '</td>';
                    echo '<td>' . $row['games_loose'] . '</td>';
                    echo '<td>' . number_format($row['coefficient'] * 100, 2) . '%</td>';
                    echo '</tr>';

                    $classement++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
