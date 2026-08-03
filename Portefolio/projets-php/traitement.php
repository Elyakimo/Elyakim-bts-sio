<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validation des champs
    if (empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    // Préparation de l'email
    $destinataire = "eonocia@gmail.com";
    $sujet = "Nouveau message de contact de $nom";
    $corps = "Nom : $nom\n";
    $corps .= "Email : $email\n";
    $corps .= "Message :\n$message\n";

    $entetes = "From: $email";

    // Envoi de l'email
    if (mail($destinataire, $sujet, $corps, $entetes)){
        echo "Merci pour votre message. Je vous répondrai dès que possible.";
    }
    else{
        echo "Une erreur est survenue lors de l'envoi de votre message.";
    }
}
else {
    header("HTTP/1.1 403 Forbidden");
    echo "Accès interdit.";
}