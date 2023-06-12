<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=padel;', 'root', 'root');
if(isset($_POST['login_submit'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email = htmlspecialchars($_POST['email']);
        $mdp = sha1($_POST['mdp']);

        $getUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
        $getUser->execute(array($email,$mdp));

        if($getUser->rowCount() > 0){
            $_SESSION['email'] = $email;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['pseudo'] = $getUser->fetch()['pseudo'];
            $_SESSION['id'] = $getUser->fetch()['id'];
            header('Location: tableau-de-bord.php');
        } else {
            echo 'Votre email ou mot de passe est incorrect';  
        }

    } else {
        echo 'Veuillez compléter tous les champs';
    }
}
?>