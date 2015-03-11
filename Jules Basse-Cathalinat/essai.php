<?php include('head.php') ?>
<h1>Films</h1>
<?php
$bdd = mysql_connect("127.0.0.1", "root", "");
mysql_query("SET NAMES UTF8"); 
mysql_select_db("labo", $bdd);
	$annee = $_GET["annee"] ;
	$mois = $_GET["mois"] ;
	$sql = 'SELECT titre, resume, image, mois, annee, csa FROM film 
	WHERE annee = "'.$annee.'" AND mois = "'.$mois.'"';
	$film = mysql_query($sql) ;
	if(!empty($film)) {
		while($row = mysql_fetch_assoc($film)) 
		{
				echo '<h1>Les sorties du mois de '.$row['mois'].' '.$row['annee'].'</h1>' ;
				echo '<h2>'.$row["ti tre"].'</h2>' ;
				echo '<img src="'.$row["image"].'" float="left" width="450" height= "600" title="'.$row["titre"].'"/>' ;
				echo '<div><span>Synopsis : </span>'.$row['resume'].'</div>' ;
				echo '<strong>' .$row['csa'].'</strong>' ;
		}
	}
	else {
		echo "Pas de résultats";
	}
?>