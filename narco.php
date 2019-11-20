<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Narcotrafiquant</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h1>Hello</h1>
	<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Acceuil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="french.php">La french Connection</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="narco.php">Le Narcotrafique</a>
  </li>
















<form method="post" action="index.php" >
	<fieldset>
		<legend style="font-weight: bold;">Vos suggestions?</legend>
		<label for="Mail">Votre email:</label>
		<input type="email" name="email" id="email" required></br>
		<label for="text">Suggestion:</label>
		<input type="text" name="suggestion" id="suggestion" maxlength="500" size="30"></br>
		<input type="Submit" name="Submit" value="Envoyé">
	</fieldset>
</form>
<?php
$destinataire = 'farris.florian@hotmail.com';
$expediteur =@$_POST['email'];
$objet = 'test';
$message =@$_POST['suggestion'];
if(isset($_POST['Submit'])){

 mail($destinataire, $objet, $message,$expediteur);
echo 'votre message à bien été envoyé';
}
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>