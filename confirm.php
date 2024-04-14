<?php
if (isset($_POST['subscribe'])) {
    // Récupérer l'email soumis dans le formulaire
    $email = $_POST['email'];

    // Envoyer un e-mail de confirmation (dans une application réelle, vous devriez implémenter cette fonctionnalité)
    // mail($email, "Confirmation d'inscription", "Nous vous envoyons un e-mail de confirmation. Merci de vérifier votre boîte de réception.");

    // Afficher un message de confirmation

    echo "Nous vous envoyons un e-mail de confirmation. Merci de vérifier votre boîte de réception.";
}
?>


