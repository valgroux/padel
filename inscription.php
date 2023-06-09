<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>S'inscrire</title>
        <link rel="stylesheet" href="./style/reset.css">
        <link rel="stylesheet" href="./style/variables.css">
        <link rel="stylesheet" href="./style/inscription.css">
    </head>
    <body>
        <div class="container">
            <h1>Inscrivez-vous</h1>
            <form method="POST" action="">
                <div class="username">
                    <label for="pseudo">Nom d'utilisateur :</label><br>
                    <input type="text" name="pseudo" id="username" value="" required autocomplete="off">
                </div>
                <div class="email">
                    <label for="email">Adresse e-mail :</label><br>
                    <input type="email" name="email" id="email" value="" required autocomplete="off">
                </div>
                <div class="password">
                    <label for="mdp">Mot de passe :</label><br>
                    <input type="password" name="mdp" id="password"required autocomplete="off">
                </div>
                <input class="inscription-cta" type="submit" name="inscription_submit" value="S'inscrire">
            </form>
            <a href="index.php">Retour à la page de connexion</a>
        </div>
        <?php include 'members/inscription_process.php'; ?>
    </body>
</html>