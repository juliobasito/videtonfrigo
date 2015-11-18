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
				echo '<a href="recherche.php">Rechercher un utilisateur</a>' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="moncompte.php">Mon compte</a>' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="modifier.php">Modifier</a>' ;

			}		
				
		?>
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
		<?php
					
		$db->query('SET nAMES utf8');
	if(!empty($_POST["envoyer"]))
	{
		$prenom = mysql_real_escape_string($_POST["prenom"]) ;
		$nom = mysql_real_escape_string($_POST["nom"]) ;
		$mail = mysql_real_escape_string($_POST["mail"]) ;
		$mdp = mysql_real_escape_string($_POST["mdp"]) ;

		global $db;
		$sql = $db->prepare('INSERT INTO utilisateurs(prenom, nom, mail, mdp) VALUES (:prenom, :nom, :mail, :mdp)');
		$sql->execute(array(
			"prenom" => $prenom,
			"nom" => $nom,
			"mail" => $mail,
			"mdp" => $mdp,
		)
		
	);
	
	}
		
	
?>

	<form method="post" align="center" action="" >
		<fieldset>
		<legend>Vos coordonnées</legend>
		<label>Votre nom</label> : <input type="text" name="nom"/>
		<br/>
		<label>Votre prénom</label> : <input type="text" name="prenom" />
		<br/>
		<label>Votre mail</label> : <input type="email" name="mail" placeholder="Ex : john.doe@doe.com"/>
		<br/>
		<label>Votre age</label> : <input type="number" name="age"/>
		<br/>
		<label>Votre télephone</label> : <input type="tel" name="tel" placeholder="Ex : 06 06 75 15 32"/>
		<br/>
		<label>Mot De Passe</label> : <input type="password" name="mdp" />
		</fieldset>
		<input type="submit" name="envoyer" value="Envoyer" id="envoyer"/>
	</form>


		<div>
	</body>
</html>