<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../styles/style.css" />
		<link rel="stylesheet" href="../styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
			<?php
				include('connexion_bdd.php') ;
if( !empty($_SESSION) )
			{
				echo '<a href="recherche.php">Rechercher un utilisateur</a>' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="moncompte.php">Mon compte</a>' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="modifier.php">Modifier</a>' ;

			}		
				
		?>
		

	
		<header id="header">
			<div class="headeracceuil" > 
				<h1 class="titre">The Social Labs !!!</h1>
			</div>
		</header>
		
		<div id="menu" >
			<div class="acceuil"><a href="../index.php">ACCEUIL</a></div>
			<div class="connexion"><a href="connexion.php" align="left">CONNEXION</a></div>
			<div class="presentation"><a href="#">PRESENTATION</a></div>
			<div class="creer"><a href="creercompte.php">CREER VOTRE COMPTE</a></div>
		</div>
		
		<div id="main">
		<p id="lorem" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at turpis ut justo fermentum porta. Aliquam luctus, dolor accumsan bibendum consequat, turpis diam volutpat nisl, id ultricies nisi dui in nulla. Praesent hendrerit, odio in tincidunt molestie, felis felis blandit sapien, sit amet varius dui eros in enim. Aenean semper, ipsum quis ultrices posuere, felis magna feugiat metus, sed sollicitudin arcu velit in tortor. Sed imperdiet nulla sed tortor porta convallis. In a dui dapibus, dapibus turpis at, porta magna. Morbi vitae mauris est. Nulla facilisi. Sed fermentum nibh quis sem dignissim interdum.

Ut pretium fermentum pretium. Praesent placerat nunc porttitor elit dictum, vel ullamcorper augue tempor. Maecenas risus quam, tristique in metus ac, bibendum vestibulum nunc. Nunc sit amet dolor eu mi semper volutpat sed ut nunc. Nulla facilisi. Nam sed sodales sapien. Fusce imperdiet metus eu aliquet egestas. Maecenas feugiat, dolor luctus volutpat imperdiet, tellus erat dignissim nibh, a eleifend dui orci a tortor. Sed vel scelerisque erat, nec gravida ante.

Suspendisse potenti. Nulla non vehicula nisl, eu volutpat arcu. Nulla sollicitudin, libero nec vulputate tempus, nisl diam viverra nibh, id eleifend diam lorem suscipit lacus. Praesent eu dolor vel arcu euismod posuere eu eu ipsum. Integer dictum enim eget diam consectetur viverra id vitae augue. Curabitur adipiscing tellus a tincidunt varius. Cras eu fringilla magna, in placerat massa. Nulla gravida, dolor sed elementum convallis, urna diam dignissim felis, malesuada blandit metus turpis ornare sem. Aenean sagittis tincidunt rutrum. Sed purus justo, eleifend at convallis sed, lacinia sit amet justo.</p>
		<div>
	</body>
</html>