<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - GazelVoy</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Inscription - GazelVoy</h2>
    <form method="post" action="inscription.php">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="motdepasse">Mot de passe :</label>
        <input type="password" id="motdepasse" name="motdepasse" required><br><br>

        <label for="confirmer_motdepasse">Confirmer le mot de passe :</label>
        <input type="password" id="confirmer_motdepasse" name="confirmer_motdepasse" required><br><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>


</html>
