<?php
require 'lib/utils/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style-interface-connexion.css">
    <title>Connexion</title>
</head>
<body>
    <div class="image">
        <img src="assets/img/logo.png">
    </div>
    <div class="container ">
        <div class="card">
            <p class="error"><?= error(); ?></p>
            <h1>Odyssée</h1>
            <p>Game Cards entrez dans l'univers de l'aventure</p>
            <form action="processing.php" method="post">
                <div class="form-group">
                    <label for="pwd">Identifiant</label>
                    <input type="text" name="id">
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe</label>
                    <input type="password" name="pwd">
                </div>
                <input type="submit" name="submit" class="btn" value="Connexion">
                <p>Vous n'êtes pas encore inscrit ? </p>
                <a href="inscription.php">Cliquez ici</a>
            </form>
        </div>
    </div>
</body>
</html>