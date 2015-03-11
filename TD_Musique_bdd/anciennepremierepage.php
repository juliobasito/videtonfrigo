<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("/autoload.inc.php");
require_once "connexion_bdd.php";
/*
if (!isset($_GET['ID']))
{
	$_GET['ID'] = 1;
}

$iddealbum = $_GET['ID'];


$resultats=$db->prepare("SELECT album.ID, nomalbum, dateParution, jacquette, nom FROM album JOIN artiste ON album.ID_Artiste = artiste.ID WHERE album.ID =:iddealbum");
$resultats->bindValue(':iddealbum', $iddealbum);
$resultats->execute();
$album = $resultats->fetch(PDO::FETCH_ASSOC) ;
$unAlbum = new Album($album['dateParution'],  $album['nomalbum'], $album['nom'], $album['jacquette']);



$sql = $db->prepare('SELECT dateParution, jacquette, nom, titre, duree, nomalbum, numero, piste.ID AS ID_piste FROM piste JOIN album
ON piste.ID_Album = album.ID JOIN artiste ON album.ID_Artiste = artiste.ID WHERE album.ID = :iddealbum' );
$sql->bindValue(':iddealbum', $iddealbum);
$sql->execute() ;
$listepiste = $sql->fetchAll(PDO::FETCH_ASSOC) ;
$i = 1;
foreach($listepiste as $piste)
{
	${'piste'.$i} = new piste($piste['numero'], $piste['titre'], $piste['duree']);
	$unAlbum->ajouterPiste(${'piste'.$i});
	$i++;
	
}



/*$unAlbum->to_string();
foreach($unAlbum as $unePiste)
{
	echo $unePiste->toString();
}
*/

$stmt = ("CALL infoAlbum(:variable)");

$stmt = $db->prepare($stmt);
$stmt->bindParam(1, $return_value, PDO::PARAM_STR, 4000); 

// Appel de la procédure stockée
$stmt->execute();

print "La procédure a retourné : $return_value\n";
?>

<!DOCTYPE html>
<html>    
    <head>
        <title><?= $unAlbum->getTitre(); ?></title>
        <meta charset="UTF-8">         
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="album">
            <span class="titreAlbum" ><?= $unAlbum->getTitre() ?></span>
            <span class="dureeAlbum">(durée <?= $unAlbum->getDuree(); ?>)</span>
            <hr />
            <img class="jacquetteAlbum" src="<?= $unAlbum->getJacquette() ?>"/></img>
            <ul>
            <?php foreach ($unAlbum as $unePiste) { ?>
                <li>
                    <?= $unePiste->getNumero() ?> - <span class="titrePiste"> <?= $unePiste->getTitre()?></span> ( <?= $unePiste->getDuree() ?>)
                </li>
            <?php } ?>
            </ul>
			
			<a href="ajoutAlbum.php">Ajouter un Album</a>
           
        </div>
    </body>
   
</html>
