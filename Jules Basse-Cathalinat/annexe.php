<?php
	include('connexion_bdd.php') ;

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

<!DOCTYPE html>
<html>
<head>
	<title>France-horreur</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="style.css"/>
</head>

<body>
<a href="index.php">Acceuil</a>
<h1 align="center"> Recevez notre newsletter gratuitement ! </h1>
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
		<fieldset>
		<legend>Vos préférences</legend>
		<p>
       Veuillez indiquer votre film préféré:<br />
       <input type="radio" name="saw" value="saw" id="saw" /> <label for="saw">Saw</label><br />
       <input type="radio" name="exorciste" value="exorciste" id="exorciste" /> <label for="exorciste">L'exorciste</label><br />
       <input type="radio" name="psychose" value="psychose" id="psychose" /> <label for="psychose">Psychose</label><br />
       <input type="radio" name="rose" value="rose" id="rose" /> <label for="rose">Rosemary's baby</label>
   </p>
   </fieldset>
   <input type="submit" name="envoyer" value="Envoyer" id="envoyer"/>
	</form>
	
</body>
</html>
