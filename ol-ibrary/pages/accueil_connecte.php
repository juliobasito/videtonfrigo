<?php
	include('connexion_bdd.php') ;

		$db->query('SET NAMES utf8');
if (!empty($_POST['envoyer']))
{	
	
	$titre=mysql_real_escape_string($_POST["titre"]) ;
	$auteur = mysql_real_escape_string($_POST["auteur"]) ;
	$date = mysql_real_escape_string($_POST["date"]) ;
	$genre = mysql_real_escape_string($_POST["genre"]) ;

		global $db;
	$sql = $db->prepare('INSERT INTO ajout_livre(titre, auteur, date, genre) VALUES (:titre, :auteur, :date, :genre)');
	$sql->execute(array(
		"titre" => $titre,
		"auteur" => $auteur,
		"date" => $date,
		"genre" => $genre,
		)
		
	);
	
	
	echo '<h1>'.$titre.'</h1>' ;
	echo '<br/>' ;
	echo 'ecrit par : '.$auteur.' le '.$date ;
	
		
	}
if(!empty($_POST["montrer"]))
{	
	global $bdd;
$sql = ('SELECT * FROM ajout_livre' );
$sql = $bdd->prepare($sql);
echo $sql ;
$sql->execute(array()) ;
$livre = $sql->fetchAll(PDO::FETCH_ASSOC) ;

		
		echo '<li font-weight="bold"; color="black";>' .$livre['titre']. '</li>';
		echo $livre['auteur'] ;
		echo $livre['date'] ;
		echo $livre['genre'] ;

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
			<h1>The Social' Lab</h1>
			<h2> Bienvenue, 
				<?php 
					if(!empty($_SESSION['utilisateur']))
					{
					
					echo $_SESSION['utilisateur'];
					}
					 ?> </h2>
					 <div id="btn_ajouter">
					 <a href="reserver.php"><h3 id="ajout_livreh3">Reserver</h3></a>
					 <a href="modifier.php"><h3 id="ajout_livreh3">Modifier</h3></a>
					 </div>
					 <div id="btn_ajouter" />
					 <form method="POST" action="" />
	<h3 id="ajout_livreh3">Ajouter livre</h3>
	<br/>
			<input type="text" name="titre" placeholder="titre" /><br/><br/>
			<input type="text" name="auteur" placeholder="auteur" /></br/><br/>
			<input type="date" name="date" placeholder="date"/><br/><br/>
			<input type="text" name="genre" placeholder="genre" />
			<input type="text" name="image" placeholder="url d'une image" />
			<input type="submit" name="envoyer" />
			</div>
		</header>
		<div id="wrapper">
			<a href="recherche.php">
				<div id="btn_recherche">
					<h3 class="specialh3">Rechercher</h3>
				</div>
			</a>
			<a href="moncompte.php">
				<div id="btn_moncompte">
					<h3>Mon compte</h3>
				</div>
			</a>
			<a href="deconnexion.php">
				<div id="btn_deconnexion">
					<h3 class="specialh3">Déconnexion</h3>
				</div>
			</a>
		</div>
		<footer>

		</footer>
	</body>
</html>