<!DOCTYPE html>
<html lang="en">
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
                <label for="username">Nom d'utilisateur :</label><br>
                <input type="text" name="username" id="username" value="" required>
            </div>
            <div class="email">
                <label for="email">Adresse e-mail :</label><br>
                <input type="email" name="email" id="email" value="" required>
            </div>
            <div class="password">
                <label for="password">Mot de passe :</label><br>
                <input type="password" name="password" id="password"required>
            </div>
            <input class="inscription-cta" type="submit" name="inscription_submit" value="S'inscrire">
        </form>
        <a href="index.php">Retour à la page de connexion</a>
    </div>
</body>
</html>