<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = trim($_POST["nom"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $message = trim($_POST["message"] ?? "");

    // Validation des champs
    if (empty($nom) || empty($email) || empty($message)) {
        echo "Veuillez remplir tous les champs.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse e-mail invalide.";
        exit;
    }

    // Préparation de l'email
    $destinataire = "eonocia@gmail.com";

    $sujet = mb_encode_mimeheader("Nouveau message de contact de $nom", "UTF-8");

    $corps = "Nom : $nom\n";
    $corps .= "Email : $email\n";
    $corps .= "Message :\n$message\n";

    $entetes  = "From: Portfolio Contact <eonocia@gmail.com>\r\n";
    $entetes .= "Reply-To: $email\r\n";
    $entetes .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($destinataire, $sujet, $corps, $entetes)) {
        echo "Merci pour votre message. Je vous répondrai dès que possible.";
    } else {
        echo "Une erreur est survenue lors de l'envoi de votre message.";
    }

} else {
    header("HTTP/1.1 403 Forbidden");
    echo "Accès interdit.";
}
header("Location: contact.php?envoi=succes");
exit;
?>