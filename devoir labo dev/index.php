<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styles/style.css" />
		<link rel="stylesheet" href="styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
		
		<div id="rechercher">
		<form method="POST">
		<fieldset id="rechercher" color="red">
		<label>Rechercher</label> : <input type="text" name="search" placeholder="Bastien" />		
		</fieldset>
		</form>
		<?php 

$db_database=mysql_connect('localhost', 'root', '');
	mysql_select_db("site_devoir", $db_database); 

	
if (isset($_POST["search"]) && !empty($_POST["search"]))
{

	$sql = 'SELECT nom, prenom
			FROM search
			WHERE prenom LIKE "%' .$_POST["search"].'%"';
			
			echo $sql ;
}

$resultat = mysql_query($sql);

if (!empty($resultat)) 
{
	while ($row = mysql_fetch_assoc($resultat)) 
	{
		echo "<div><span>Nom de l'utilisateur : </span>".$row["nom"]."</div>";
		echo "<div><span>Prénom de l'utilisateur : </span>".$row["prenom"]."</div>";
	}
}
else
{
	echo "Pas de résultat";
}

?>
	
		<header id="header">
			<div class="headeracceuil" > 
				<h1 class="titre">Le site officiel du labo dev web</h1>
			</div>
		</header>
		
		<div id="menu" >
			<div class="acceuil"><a href="#">ACCEUIL</a></div>
			<div class="horaires"><a href="pages/horaires.php" align="left">INFOS</a></div>
			<div class="programme"><a href="pages/programme.php">PROGRAMME</a></div>
			<div class="contact"><a href="pages/contact.php">CONTACT</a></div>
		</div>
		
		<div id="main">
		</br></br></br>
			<h2><strong> BIENVENUE SUR LE SITE OFFICIEL DU LABO DEV WEB</strong> </h2>
								</br></br></br></br></br></br></br></br></br></br>
				<p><strong> Ici vous trouverez toutes les informations nécessaires concernat ce labo.</strong></p>
		<div>
	</body>
</html>