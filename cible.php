<?php

$sujet = htmlspecialchars($_POST['user_request']);
$message = htmlspecialchars($_POST['user_message']) . "\n";
$message .= "Entreprise : " . htmlspecialchars($_POST['user_compagny']);
$from = htmlspecialchars($_POST['user_firstname']);
$from .= htmlspecialchars($_POST['user_lastname']);
$mailUser = htmlspecialchars($_POST['user_email']);
$destinataire = 'hinnebo.jbh@hotmail.fr';
$headers = "From: " . $from . "\n";
$headers .= "Reply-To: ". $mailUser ."\n";
$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
$headers .='Content-Transfer-Encoding: 8bit';

if(!empty($_POST['user_firstname']) && !empty($_POST['user_lastname']) && !empty($_POST['user_email']) && !empty($_POST['user_message'])) {
  if (mail($destinataire, $sujet, $message, $headers)) {
    header('Location: contact.php?type=success&code=1');
  }
  else {
    header('Location: contact.php?type=error&code=2');
  }
}
else {
  header('Location: contact.php?type=error&code=1');
}

 ?>
