<?php
include('connexion_bdd.php') ;
if(!empty($_SESSION))
{
		echo "<h4>Bonjour ".$_SESSION['nom']. "</h4>" ;
		echo '<a href="deconnexion.php" > DECONNEXION</a>' ;
	
	$sql = 'SELECT utilisateur_id, nom, prenom, age, telephone, image_src FROM kinder WHERE utilisateur_id != "'.$_SESSION["id"].'" ORDER BY rand()';
			//echo $sql ;
			$result = $db->prepare($sql);
				$columns = $result->execute();
				$columns = $result->fetch();
				//echo $columns["image_src"] ;
				// $_SESSION['image_src'] = $_POST["image_src"] ;
		
		
	
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
		<h1> Tinder </h1>
		</header>
		<div id="polaroid">
			<div id="picture">
				<?php echo '<img src="'.$columns["image_src"].'" id="choicepic"/>' ?>
			</div>
			<div id="name"> 
				<?php echo $columns["prenom"] ; ?>
			</div>
			<div id="age"> 
				<?php echo $columns["age"]; ?>
			</div>
			<div id="friends">
				<img src="../images/nat922.png"/> <br/>
				0
			</div>
			<div id="likemention">
				<img src="../images/nat922.png"/> <br/>
				22
			</div>
			<div id="numberpic">
				<img src="../images/nat922.png"/> <br/>
				4
			</div>
		</div>
		<footer>© Copyright Xavier P. 2012 - 2014. All rights reserved. </footer>
	</body>
</html>