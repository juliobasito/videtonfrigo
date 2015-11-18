<?php
include('connexion_bdd.php') ;
if(isset($_POST["envoyer"]))
{
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$age = $_POST["age"];
	$avis = $_POST["avis"];
	$commentaire = $_POST["commentaire"];
	
	$sql = $db->prepare("INSERT INTO contact(nom, prenom, age, avis, commentaire) VALUES (:nom, :prenom, :age, :avis, :commentaire)");
	$sql->bindValue(':nom',$nom);
	$sql->bindValue(':prenom', $prenom);
	$sql->bindValue(':age', $age);
	$sql->bindValue(':avis', $avis);
	$sql->bindValue(':commentaire', $commentaire);
	$sql->execute();
}
	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style/style.css" />
		<link rel="stylesheet" href="../style/reset.css" />
		<title> Site Experimental </title>
	</head>
	
	<body>
		<header id="header">
			<div class="headeraccueil" > 
				<h1 class="titre">O SITE O</h1>
			</div>
		</header>
		
		<ul id="menu" >
			<li class="acceuil"><a href="../index.php">ACCUEIL</a></li>
			<li class="directeurs"><a href="directeurs.php" align="left">Les Directeurs de laboratoire</a></li>
			<li class="avis"><a href="avis.php">L'avis des utilisateurs</a></li>
		</ul>
		
		<div id="main">
		<form method="POST" id="comment" align="center" action="" >
			<!--fieldset-->
				<input type="text" name="nom" class="comment" placeholder="nom"/>
				<input type="text" name="prenom" class="comment" placeholder="prenom"/>
				<input type="number" name="age" class="comment" placeholder="age"/>
				<select name="avis" class="comment">
					<option value="Tres Bien">Tres Bien</option>
					<option value="Bien">Bien</option>
					<option value="Moyen">Moyen</option>
					<option value="Nul">Nul</option>
				</select>
				<textarea name="commentaire" class="comment" rows="8" cols="45">Votre commentaire ici.
				</textarea>
				<input type="submit" name="envoyer"/>
			<!--/fieldset-->
		</form>
		<div>
	</body>
</html>