<?php
$destinataire = 'farris.florian@hotmail.com';
$expediteur = '';
$objet = 'test';
$message ='Un bonjour a toi!';
if (mail($destinataire, $objet, $message)) {
	echo 'votre message à bien été envoyé';
}
else {
	echo 'votre envoie a echoué';
}
?>