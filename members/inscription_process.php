<?php 
session_start();
// Connexion à la BDD
$bdd = new PDO('mysql:host=localhost;dbname=padel;' , 'root', 'root');

if(isset($_POST['inscription_submit'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        // Préparation d'une requête pour relier les valeurs du formulaire à la table
        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, email, mdp)VALUES(?, ?, ?)');
        // Exécution de la requête
        $insertUser->execute(array($pseudo, $email, $mdp));

        // Récupération de l'id de l'utilisateur
        $selectUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND email = ? AND mdp = ?');
        $selectUser->execute(array($pseudo,$email,$mdp));


        if($selectUser->rowCount() > 0){
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $selectUser->fetch()['id'];
        }
    } else {
        echo "Veuillez compléter tous les champs";
    }
};
