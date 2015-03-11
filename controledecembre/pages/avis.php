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
			<li><a href="../index.php">ACCUEIL</a></li>
			<li><a href="directeurs.php" align="left">Les Directeurs de laboratoire</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		
		<div id="main">
		
			<form method="post" action="" id="form_rechercher">
				<input type="text" name="nom_recherche" placeholder="nom ou prenom"/>
				<input type="submit" name="rechercher" value="rechercher"/>
			</form>
			<?php
				include('connexion_bdd.php');
				if(isset($_POST["rechercher"]))
				{
					$nom = '%'.$_POST["nom_recherche"].'%';   //recherche inexacte
		
					$query = $db->prepare('SELECT Nom, Prenom, Age, Avis, Commentaire FROM contact WHERE Nom LIKE "'.$nom.'" OR Prenom LIKE "'.$nom.'"');	//fonction recherche avec nom ou prenom = $nom	
					$query->execute();
					while ($infos = $query->fetch())		//==pour toutes les valeurs de la requete -> les afficher
					{
						echo "<div id='comment_search'/>";
						echo $infos["Prenom"]." ".$infos["Nom"]. "( ".$infos["Age"]." ans ) a trouvé le site ".$infos["Avis"] ;
						echo "</br>";
						echo $infos["Commentaire"];
						echo "</br></br></br>";
						echo "</div>";
					}
				}
			?>
			<?php

				
				$req = $db->prepare('SELECT nom, prenom, age, avis, commentaire FROM contact');
				$req->execute();
				while ($infos = $req->fetch())				//==pour toutes les valeurs de la requete -> les afficher
				{
					echo "<div id='comment'>";
					echo $infos["prenom"]." ".$infos["nom"]. "( ".$infos["age"]." ans ) a trouvé le site ".$infos["avis"] ;
					echo "</br>";
					echo $infos["commentaire"];
					echo "</br></br>";
					echo "</div>";
				}
			?>
		<div>
	</body>
</html>