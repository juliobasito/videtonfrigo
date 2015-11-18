<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../styles/style.css" />
		<link rel="stylesheet" href="../styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
	
		<header id="header">
			<div class="headeracceuil" > 
				<h1 class="titre">Le site officiel du labo dev web</h1>
			</div>
		</header>
		
		<div id="menu" >
			<div class="acceuil"><a href="../index.php">ACCEUIL</a></div>
			<div class="horaires"><a href="horaires.php" align="left">INFOS</a></div>
			<div class="programme"><a href="programme.php">PROGRAMME</a></div>
			<div class="contact"><a href="#">CONTACT</a></div>
		</div>
		
<?php

	if (isset( $_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["mail"]) AND isset($_POST["age"]) AND isset($_POST["avis"]) AND isset ($_POST["commentaire"]))
{

		//connexion à la base
		$db_database=mysql_connect('localhost', 'root', '');
		
		//connexion à la table
		mysql_select_db("site_devoir", $db_database);
		
		//contre injestions sql
		$nom=mysql_real_escape_string($_POST["nom"]);
		$prenom=mysql_real_escape_string($_POST["prenom"]);
		$mail=mysql_real_escape_string($_POST["mail"]);
		$age=mysql_real_escape_string($_POST["age"]);
		$avis=mysql_real_escape_string($_POST["avis"]);
		$commentaire=mysql_real_escape_string($_POST["commentaire"]);
		//insertions
		mysql_query("INSERT INTO formulaire(nom, prenom, mail, age, avis, commentaire)
					VALUES('".$nom."', '".$prenom."', '".$mail."', '".$age."', '".$avis."', '".$commentaire."')") OR DIE(mysql_error());
			
		}
		
?>
		
		<div id="main">
		
		<br/></br></br>
		<h2 align="center"><strong> Alors, Inscrivez-vous ! </strong></h2>
		<br/></br></br>
	<form method="post" align="center" id="form" >
		<fieldset>
				<legend>Vos coordonnées</legend>
		<label>Votre nom</label> : <input type="text" name="nom"/>
		<br/>
		<label>Votre prénom</label> : <input type="text" name="prenom" />
		<br/>
		<label>Votre mail</label> : <input type="email" name="mail" placeholder="Ex : john.doe@doe.com"/>
		<br/>
		<label>Votre age</label> : <input type="number" name="age"/>
		</fieldset>
		<br/></br></br>
		<fieldset>
			<legend>Le site</legend>
		<label>Votre avis</label> : <select name="avis">
			<option value="tresbien">Trés bien</option>
			<option value="bien">bien</option>
			<option value="moyen">Moyen</option>
			<option value="pasterrible">Pas terrible</option>
			<option value="tresmauvais">Trés Mauvais</option>
		</select>
		<textarea name="commentaire" placeholder="Ecrivez un commentaire..."></textarea>
		</fieldset>
		<br/>
		<input type="reset" value="effacer"/>
		<input type="submit" value="envoyer"/>
	</form>
		</div>
	</body>
	
</html>