
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>La Mafia</title>
	<style>
	 	body{
	 		background-color: black;
	 	}
	 </style>
</head>
<body>
	<div class="mafia">
	<h1><center>La Mafia</center></h1>
		<h2>Une mafia est une organisation criminelle dont les activités sont soumises à une direction collégiale occulte et qui repose sur une stratégie d'infiltration de la société civile et des institutions. On parle egalement de <i>système mafieux.</i> Les membres sont appelés "mafieux", ou parfois "mafiosi", d'après le nom italien au singulier "mafioso".</h2>
		<h3>Citation:</h3>
			<h5>"On obtient plus de choses en étant poli et armé qu'en étant juste poli. Cette simple ciation explique pour moi la persistance d'un phénomène comme la mafia à travers les siècles." <i>Al Capone.</i></h5></div>

<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="french.php">La french Connection et Zampa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="narco.php"> Le Narcotrafique</a>
  </li>
</ul>
<iframe width="560" height="500" align="right" src="https://www.youtube.com/embed/bIcYeGAfRoc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="origine">
	<p><U><center>Les origines et l'histoire de la mafia</center></U></br>


		<center><img src="mafia.png"></center></br>
	Afin de mieux comprendre les origines de la Mafia, penchons-nous sur diverses étymologies du terme "Mafia".
Le terme Mafia" regroupe de nombreuses étymologies. Le terme Mafia (orthographié "maffia" au départ)provient tout d'abord du terme "maffi", puis de se terme nait le terme "maffiusu" qui signifie "cheval harnaché" ou "cheval de la Berberie" qui qualifie quelq'un qui veut bien s'habiller. Le terme mafia entra réellement dans la langue populaire en 1861, en Sicile, juste apres l'unification de l'italie, et c'est là qu'il subit un affaiblissement phonétique devenant ainsi:"Mafia".
Le mot Mafia compte par ailleurs quelques origines étymologiques fantaisistes comme par exemple les initiales du mot auraient pour signification " Morte Ai Francesi Italia Anela", ce qui veut dire: "L'Italie aspire à la Mort des Français". Cette signification vient d'un passé historique; En 1282 lors d'une revolte de la par des habitants de l'île Siciliennes appelés "Vêpres Siciliennes", le cri des revoltés était " Morts aux Français"; durant cet évènements de nombreux français furent tués.
La consonace du mot "mafia" correspndrait à "mia figlia"("ma fille" en italien) et qui representerait le cri d'une mere aprés le viol de sa fille par, justement,un soldat fraçais lors des "Vêpres Siciliennes"("mia-figilia" se transformerait en "ma-fia","ma-fia". Bien sûr, ces dernieres origines ne sont pas fiables car elles ne peuvent pas être vérifiées.<p></br>
	<p>La Mafia possède également son propre vocabulaire spécifique facillitant la communication entre ses membres. Voici quelques exemple:</br>
		-<U>l'omerta</U> : c'est loi du silence qu'impose la Mafia avec comme devise « je ne vois pas, je n'entends pas, je ne  parle  pas ». Si une personne ne respecte pas cette loi elle est obligatoirement tuée. (image représentative en en-tête du site ou ci-dessous).</br>

	<center><img src="singe.jpg"></center>

		-<U>il pentito (plus connu sous le nom de « repenti »)</U> : c'est un ancien mafieux qui rompt la loi de l'omerta, c'est à dire qu'il livre à la police des informations et des noms sur la Mafia, en échange d'une protection et d'une réduction de sa peine. Tommaso Buscetta(Cosa Nostra) est largement reconnu comme le premier a avoir brisé l'Omerta.</br>

	<center><img src="repenti.jpg"></center>

		-<U>la cosca</U> : c'est une association mafieuse structurée par différents clans.</br>

	<center><img src="cosa.jpg"></center>

		-<U>il pizzo</U>: c'est le racket des commerçants en Sicile, la Mafia les contraint de payer une taxe en leur promettant une protection. Cette loi permet à la Mafia de contrôler le pays.</br>

	<center><img src="pizzo.jpg"></center>

		-<U>Il gabbelluto (gabella = taxe)</U>: c'est un membre de la Mafia qui reçoit le pizzo (la taxe des commerçants, expliquée au dessus).</br>

	<center><img src="taxe.jpg"></center>
</p>
</div>









<form method="post" action="index.php" >
	<fieldset>
		<legend style="font-weight: bold;">Vos suggestions?</legend>
		<label for="email">Votre email:</label>
		<input type="email" name="email" id="email" required></br>
		<label for="suggestion">Suggestion:</label>
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
</body>
</html>