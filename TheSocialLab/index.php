<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="styles/style.css" />
		<link rel="stylesheet" href="styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
	
		<header id="header">
		<?php
				include('pages/connexion_bdd.php') ;
if( !empty($_SESSION) )
			{
				echo '<a href="pages/recherche.php">Rechercher un utilisateur</a>' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="pages/moncompte.php">Mon Compte</a>' ;
				echo '------------------------------------------------------------------------------------------ ' ;
				echo '<a href="pages/modifier.php">Modifier</a>' ;

			}		
				
		?>
			<div class="headeracceuil" > 
				<h1 class="titre">The Social Labs !!!</h1>
			</div>
		</header>
		
		
		<div id="menu" >
			<div class="acceuil"><a href="#">ACCEUIL</a></div>
			<div class="connexion"><a href="pages/connexion.php" align="left">CONNEXION</a></div>
			<div class="presentation"><a href="pages/presentation.php">PRESENTATION</a></div>
			<div class="creer"><a href="pages/creercompte.php">CREER VOTRE COMPTE</a></div>
		</div>
		
		<div id="main">
		</br></br></br>
			<h2><strong>Uniquement pour vous, voici une fleur !!</strong> </h2>
								
				<img src="images/fleur.jpg" alt="fleur" id="image_fleur" />
		<div>
	</body>
</html>