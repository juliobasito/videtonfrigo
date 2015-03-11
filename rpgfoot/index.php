<!DOCTYPE html>
<?php
	include('pages/connexion_bdd.php');
	require_once '/autoload.inc.php';
	if (!empty($_POST["envoyer"]))
	{
		$sql = 'SELECT COUNT(*) AS nb, nom, prenom, id, pseudo, password FROM user WHERE pseudo ="'.$_POST["pseudo"].'" AND password ="'.$_POST["password"].'"';
		echo $sql;
		$sql2 = $db->prepare($sql);
		$sql2->execute();
		$columns =$sql2->fetch();
		$_SESSION["user_id"]=$columns["id"];
		if($columns["nb"] == 1)
		{
			$sql3 = $db->prepare('SELECT id, nom, prenom, password, pseudo FROM user WHERE id='.$columns["id"].'');
			$sql3->execute();
			$useract = new user($columns["id"], $columns["nom"], $columns["prenom"], $columns["password"], $columns["pseudo"]);
			$_SESSION["user"] = $useract;
			header('location:pages/acceuil.php');
		}
		else 
		{
			echo "erreur d'authentification";
		}
	}
	
	if (!empty($_POST["soumettre"]))
	{
		if($_POST["passwordin"]==$_POST["repassword"])
		{
			$nom = $_POST["nom"];
			$prenom = $_POST["prenom"];
			$password = $_POST["passwordin"];
			$pseudo = $_POST["pseudoin"];
			$sql = $db->prepare('INSERT INTO user(nom, prenom, password, pseudo) VALUES ("'.$nom.'", "'.$prenom.'", "'.$password.'", "'.$pseudo.'")');
			$sql->execute();
			$sql2 = $db->prepare('SELECT id, nom, prenom, password, pseudo FROM user WHERE pseudo ="'.$_POST["pseudoin"].'" AND password ="'.$_POST["passwordin"].'"');
			$sql2->execute();
			$columns2=$sql2->fetch();
			$useract = new user($columns2["id"], $columns2["nom"], $columns2["prenom"], $columns2["password"], $columns2["pseudo"]);
			$_SESSION["user_id"] = $columns2["id"];
			$_SESSION["user"] = $useract;
		}
	}
?>		
<html>
	<head>
		<meta charset="utf-8">
		<title>Mon test de foot</title>
	</head>
	
	<body>
		<form method="POST" action="">
			<input type="text" name="pseudo"/></br>
			<input type="password" name="password" /> </br>
			<input type="submit" name="envoyer"/></br>
		</form>
		
		<form method="POST" action="">
			<label>pseudo :</label><input type="text" name="pseudoin"/></br>
			<label>mot de passe :</label><input type="password" name="passwordin" /> </br>
			<label>retapper le mot de passe</label><input type="password" name="repassword" /></br>
			<label>nom :</label><input type="text" name="nom"/></br>
			<label>prenom :</label><input type="text" name="prenom"/></br>
			<input type="submit" name="soumettre"/></br>
		</form>
			
	</body>

</html>


	
		
	