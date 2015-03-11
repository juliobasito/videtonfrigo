
 
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
				<?php
				include('connexion_bdd.php') ;
if( !empty($_SESSION) )
			{

				echo '<a href="modifier.php">Modifier</a>' ;
				echo '--------------------------------------------------------------------------------------------------------------------' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="moncompte.php">Mon compte</a>' ;
			}		
				
		?>
			<div class="headeracceuil" > 
				<h1 class="titre">The Social Labs !!!</h1>
			</div>
		</header>
		
		<div id="menu" >
			<div class="acceuil"><a href="../index.php">ACCEUIL</a></div>
			<div class="connexion"><a href="connexion.php" align="left">CONNEXION</a></div>
			<div class="presentation"><a href="presentation.php">PRESENTATION</a></div>
			<div class="creer"><a href="creercompte.php">CREER VOTRE COMPTE</a></div>
		</div>
		
		<div id="main">
		<form method="POST" action=""/>
			<input type="text" name="nom" placeholder="nom" />
			<input type="submit" name="envoyer" />
		</form>
		<?php

if(!empty($_POST["envoyer"]))
{
$nom= '%'.$_POST["nom"].'%';
$sql = 'SELECT nom ,prenom, mail FROM utilisateurs WHERE nom LIKE "'.$nom.'" ORDER BY nom; ';
$bdd = mysql_connect("127.0.0.1", "root", "");
mysql_query("SET NAMES UTF8") ;
mysql_select_db("sociallab", $bdd);
$nom = mysql_query($sql) ;
		
			if(!empty($nom)){
	while($row = mysql_fetch_assoc($nom)){

		echo "<div><span>Les noms : </span>".$row['prenom'].' '.$row['nom']."</div>" ;
		echo "<div><span>Le mail : </span>".$row['mail'] ;

	}
}
else{
	echo "pas de résultat" ;
}
}

 ?>

		</div>
	</body>
</html>

