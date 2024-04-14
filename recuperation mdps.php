<!DOCTYPE html>
<html>
<head>
    <title>Récupération de mot de passe</title>
</head>
<body>

<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer l'adresse email fournie par l'utilisateur
    $email = $_POST["email"];

    // Validation simple de l'email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Générer un nouveau mot de passe aléatoire
        $nouveau_mot_de_passe = substr(md5(uniqid(rand(), true)), 0, 8); // Génère une chaîne de 8 caractères aléatoires

        
        echo "Votre nouveau mot de passe est : " . $nouveau_mot_de_passe;
    } else {
        echo "Adresse email non valide.";
    }
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>
    <label for="email">Adresse Email :</label><br>
    <input type="email" id="email" name="email"><br>
    <input type="submit" value="Réinitialiser le mot de passe">
</form>
<!-- Afficher le message -->
<?php echo $nouveau_mot_de_passe; ?>
</body>
</html>
