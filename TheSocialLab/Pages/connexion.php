<!DOCTYPE html>
<html>
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
				echo '<a href="moncompte.php">Mon Compte</a>' ;
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
			<div class="connexion"><a href="#" align="left">CONNEXION</a></div>
			<div class="presentation"><a href="presentation.php">PRESENTATION</a></div>
			<div class="creer"><a href="creercompte.php">CREER VOTRE COMPTE</a></div>
		</div>
		
		<div id="main">
		</br></br></br>
			<h2><strong>Connectez vous pour tchattez !!!</strong> </h2>
								
	<?php

	if(!empty($_POST["envoyer"]))
	{
	if(isset($_POST['mail']) || isset($_POST['mdp']))
			{
			if($_POST['mail']!="" && $_POST['mdp']!="")
			{
				$sql = 'SELECT COUNT(*) AS nb, utilisateur_id, nom, prenom FROM utilisateurs WHERE mail ="'.$_POST['mail'].'"
				AND mdp="'.$_POST['mdp'].'"';
				$result = $db->prepare($sql);
				$columns = $result->execute();
				$columns = $result->fetch();
				$nb = $columns['nb'];
				if($sql)
				{							
					$_SESSION['utilisateur'] = $columns['nom'] ;//.' '.$columns['prenom'];	
					$_SESSION['nom'] = $columns['prenom']. ' '.$columns['nom'];
					$_SESSION['utilisateur_id'] = $columns['utilisateur_id'];				
				}
				else
				{					
					echo "<div class=\"erreur_connexion\">Vos identifiants sont erronés</div>";					
				}
			}
			else
			{
				echo "<div class=\"erreur_connexion_champs\">Remplissez tous les champs</div>";
			}
		}
	}
	if ( !empty($_SESSION) )
	{
		echo "<h4>Bonjour ".$_SESSION['nom']. "</h4>" ;
		echo '<a href="deconnexion.php" > DECONNEXION</a>' ;
	
	} else {
	
	?>
	
	<form method="POST" id="formulconnect"> 
		<h3>Connexion</h3>
		<input name="mail" type="email" placeholder="email">
		<input name="mdp" type="password" placeholder="mot de passe">
		<input type="submit" name="envoyer" value="Se connecter">
	</form>
	<div>
	</body>
	<?php
	}
	
	?>
		
</html>