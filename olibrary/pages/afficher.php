
<?php include ('connexion_bdd.php'); ?>
<?php


global $db;
$sql = $db->prepare('SELECT titre, auteur, date, genre FROM ajout_livre ORDER BY titre' );

$sql->execute() ;
$livres = $sql->fetchAll(PDO::FETCH_ASSOC) ;

foreach($livres as $livre)
{
	echo '<h1><li style="margin-left:30px" id="liphp" >' .$livre['titre']. '</li></h1>';
	echo '<p><strong>Ecrit par '.$livre['auteur']. '.</strong></p>'  ;
	echo '<p>Sorti le '.$livre['date'] ;
	echo '<p>Genre : '.$livre['genre']  ;
	echo '<img src="'.$livre['image'].'"/>' ;
}
echo '</ul></br></br></br>' ;


?>

