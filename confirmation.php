<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réservation</title>
    <link rel="stylesheet" href="style.css"> <!-- Assurez-vous d'avoir un fichier CSS pour la mise en forme -->
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Confirmation de réservation</h1>
    </div>

    <div class="section">
        <p>Merci pour votre réservation !</p>
        <p>Votre réservation a été enregistrée avec succès.</p>

        <h2>Détails de la réservation :</h2>
        <ul>
            <li><strong>Nom:</strong> <?php echo htmlspecialchars($_POST["nom"]); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></li>
            <li><strong>Destination:</strong> <?php echo htmlspecialchars($_POST["Destination"]); ?></li>
            <li><strong>Check_In:</strong> <?php echo htmlspecialchars($_POST["Check_In"]); ?></li>
            <li><strong>Check_Out:</strong> <?php echo htmlspecialchars($_POST["Check_Out"]); ?></li>
        </ul>
    </div>
</div>

</body>
</html>
