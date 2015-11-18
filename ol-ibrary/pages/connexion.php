<?php

	//connexion à la base de donnée
	include('connexion_bdd.php');

	//script de reconnaissance de l'utilisateur
	if (isset($_POST['mail']) AND isset($_POST['mdp']))
	{
		if($_POST['mail']!="" && $_POST['mdp']!="")
		{
			$sql = 'SELECT COUNT(*) AS nb, id, pseudo, mail, motdepasse, poste FROM utilisateurs WHERE mail ="'.$_POST['mail'].'" AND motdepasse ="'.$_POST['mdp'].'"';
			echo $sql ;
			$result = $db->prepare($sql);
			$columns = $result->execute();
			$columns = $result->fetch();
			$nb = $columns['nb'];
			if($nb == 1)
			{
				session_start();
				header('location:accueil_connecte.php');
				$_SESSION['utilisateur'] = $columns['pseudo'];
				$_SESSION['mail'] = $columns['mail'];
				$_SESSION['mdp'] = $columns['motdepasse'];
				$_SESSION['id'] = $columns['id'] ;
				$_SESSION['poste'] = $columns['poste'] ;
				
				exit();
			}
			else
			{
				echo "<div id=\"erreur_connexion\"> identifiants errones </div>";
			}
		}
		else
		{
			echo "<div id=\"erreur_champs\"> remplir tous les champs </div>";
		}
	}


?>


<! DOCTYPE HTML>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="../styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<header>
			<a href="../index.php"><h1>The Social' Lab</h1></a>
			<h2> CONNEXION </h2>
		</header>
		<div id="wrapper">
			<div id="encart_connexion">
				<form method="post" action="">
				<input type="mail" name="mail" placeholder="mail" id="connexion_mail"/>
				<input type="password" name="mdp" placeholder="mot de passe" id="connexion_password" /> <br/>
				<input type="submit" name="connexion" id="connexion_submit"/>
			</form>
			</div>
		</div>
		<footer>

		</footer>
	</body>
</html>