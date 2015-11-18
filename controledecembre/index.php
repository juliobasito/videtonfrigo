<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style/style.css" />
		<link rel="stylesheet" href="style/reset.css" />
		<title> Site Experimental </title>
	</head>
	
	<body>
		<header id="header">
		<?php
				include('pages/connexion_bdd.php') ;	
				
		?>
			<div class="headeraccueil_prb" > 
				<h1 class="titre">O SITE O</h1>
			</div>

		</header>
		
		<ul id="menu" >
			<li><a href="pages/directeurs.php" align="left">Les Directeurs de laboratoire</a></li>
			<li><a href="pages/avis.php">L'avis des utilisateurs</a></li>
			<li><a href="pages/contact.php">Contact</a></li>
		</ul>
		
		<div id="contenu_directeur">
		<p>Nam quis metus at odio eleifend maximus vitae et eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed at tortor imperdiet, congue nisi eu, lobortis arcu. Etiam faucibus ut lorem et condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras congue, felis vitae ullamcorper pharetra, mi ex eleifend quam, hendrerit fringilla sapien diam eu ex.
			</p>
		</div>
	</body>
</html>