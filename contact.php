<?php
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$success = mail("contact@adam-marzuk.fr", "[Portfolio contact] $nom", $message, "Reply-To: $email");

if($success) {
   header("Location: ../?success=1");
} else {
   echo "Une erreur est survenue lors de l'envoi du message.";
}
?>