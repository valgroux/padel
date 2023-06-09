<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Ligue Trez Hir</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/variables.css">
    <link rel="stylesheet" href="./style/home.css">
</head>
<body>
    <div class="container">
        <div class="container__left">
            <h1>Padel Ligue Trez Hir</h1>
            <p>Créez des équipes, enregistrez les résultats des matchs et suivez votre progression dans le classement.
                Préparez-vous à vivre des moments de compétition et de plaisir.
            </p>
            <form method="POST" action="">
                <div class="email">
                    <label for="email">Votre adresse mail :</label><br>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="password">
                    <label for="password">Votre mot de passe :</label><br>
                    <input type="password" name="password" id="password" required>
                    <a href="#"><p>Mot de passe oublié ?</p></a>
                </div>
                <input class="connexion-cta" type="submit" name="login_submit" value="Se connecter">
            </form>
            <a href="inscription.php">Pas encore inscrit ?</a>
        </div>
        <div class="container__right"></div>
    </div>
</body>
</html>
