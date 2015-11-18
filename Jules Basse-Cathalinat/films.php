
<?php include('head.php');  ?>
<?php include('bdd.php');  ?>
<?php include ('connexion.php'); ?>
<?php

if(!empty($_GET['mois']) AND !empty($_GET['annee'])) {
	$mois = $_GET['mois'] ;
	$annee = $_GET['annee'] ;
} else {
	$mois = 'mai' ;
	$annee = '2014' ;
}

global $bdd;
$sql = $bdd->prepare('SELECT titre, resume, image, nom ,prenom, csa, avis_national, note_internationale, video  FROM film JOIN realisateur 
ON film.id_realisateur = realisateur.id WHERE mois LIKE :mois AND annee LIKE :annee ORDER BY titre' );
$sql->execute(array("mois"=> $mois, "annee" => $annee)) ;
$films = $sql->fetchAll(PDO::FETCH_ASSOC) ;
if(!empty($mois) || !empty($annee)){
	if($annee != 4000) {
		echo '<h2> Les sorties du mois de ' .$mois.' '.$annee. '</h2>' ;
	} else {
		echo '<h2>Bientot dans vos salles !</h2>' ;
	}
	while($mois == 'mois' ||$annee == 'annee'){
		
		echo '<li font-weight="bold"; color="black";>' .$film['titre']. '</li>';
		echo '<p><img src="'.$film['image'].'" align="left" style="margin-left:20px" width="450" height="600"/>' ;
		echo $film['resume']. '<br/> <strong>' .$film['csa']. '</strong>'  ;
		echo '</br></p>';
		echo '<p>Avis national : ' .$film['avis_national']. '<br/> Note Internationale : ' .$film['note_internationale']. '/20 </p>' ;
	}
echo '</ul>' ;
}
else{
	echo "pas de résultat" ;
}

echo '<ul>' ;
foreach($films as $film)
{
	echo '<li style="margin-left:30px" id="liphp" >' .$film['titre']. '</li>';
	echo '<p><strong>Un film de '.$film['prenom']. ' ' .$film['nom']. '.</strong></p>'  ;
	echo '<p><img src="'.$film['image'].'" align="left" style="margin-left:40px" width="450" height="600"/>' ;
	echo $film['resume']. '<br/> <strong>' .$film['csa']. '</strong>'  ;
	echo '</br></p>';
	echo '<p style="margin-left:30px" >Avis national : ' .$film['avis_national']. '<br/> Note Internationale : ' .$film['note_internationale']. '/20 </p>' ;
}
echo '</ul>' ;


?>

<html>
	<head>
	</head>
	<body>
	<script type="text/javascript" src="lightbox.js"></script>
	</body>
</html>