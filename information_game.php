<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un match</title>
    <link rel="stylesheet" href="./style/reset.css">
    <link rel="stylesheet" href="./style/variables.css">
    <link rel="stylesheet" href="./style/creer-match.css">
</head>

<body>
    <div class="container">
        <h1>Créer un match</h1>
        <form method="POST" action="">
            <div class="team">
                <h2>Équipe 1</h2>
                <select name="player1" required>
                    <option value="">Sélectionnez un joueur</option>
                    <?php foreach ($players as $player) : ?>
                        <option value="<?php echo $player['id']; ?>"><?php echo $player['pseudo']; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="player2" required>
                    <option value="">Sélectionnez un joueur</option>
                    <?php foreach ($players as $player) : ?>
                        <option value="<?php echo $player['id']; ?>"><?php echo $player['pseudo']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="team">
                <h2>Équipe 2</h2>
                <select name="player3" required>
                    <option value="">Sélectionnez un joueur</option>
                    <?php foreach ($players as $player) : ?>
                        <option value="<?php echo $player['id']; ?>"><?php echo $player['pseudo']; ?></option>
                    <?php endforeach; ?>
                </select>
                <select name="player4" required>
                    <option value="">Sélectionnez un joueur</option>
                    <?php foreach ($players as $player) : ?>
                        <option value="<?php echo $player['id']; ?>"><?php echo $player['pseudo']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="winning-team">
                <h2>Équipe gagnante</h2>
                <select name="winning_team" required>
                    <option value="1">Équipe 1</option>
                    <option value="2">Équipe 2</option>
                </select>
            </div>
            <input class="create-match-cta" type="submit" name="create_match_submit" value="Valider">
        </form>
        <a href="tableau-de-bord.php">Retour au tableau de bord</a>
    </div>

    <script src="js/validation_game.js"></script>
    <?php include 'game/result_process.php'; ?>
</body>

</html>
