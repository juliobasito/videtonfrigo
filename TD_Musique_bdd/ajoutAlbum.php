<?php
require_once "autoload.inc.php";
include("connexion_bdd.php");


if(isset($_POST['envoyer']))
{
	$titre = $_POST['titre'];
	$anneedeparution = $_POST['anneedeparution'];
	$artiste = $_POST['artiste'];
	$jaquette = $_POST['jaquette'];
	
	
	try
	{
		$db->beginTransaction();
		$reqArtiste = $db->prepare("INSERT INTO artiste (nom) VALUES (:artiste)");
		$reqArtiste->bindParam(':artiste', $artiste);
		$reqArtiste->execute();
		$IDArtiste = $db->lastInsertID();
		if(!isset($IDArtiste))
			throw new Ecxeption ("Probleme dans l'ajout d'artiste");
	
	
	
		$reqAlbum = $db->prepare("INSERT INTO album (nomalbum, dateParution, jacquette, ID_Artiste) VALUES (:nomAlbum, :anneedeparution, :jaquette, :IDArtiste)");
		$valeursParamAlbum = array(':nomAlbum' => $titre,
									':anneedeparution' => $anneedeparution,
									':jaquette' => $jaquette,
									':IDArtiste' =>$IDArtiste);
		$reqAlbum->execute($valeursParamAlbum);
		$IDAlbum = $db->lastInsertID();
	
		//ajout d'une piste sans formulaire :
	
		/*
		$reqPiste = $db->prepare('INSERT INTO Piste (numero, titre, duree, ID_Album )
		VALUES (:numero, :titre, :duree, :IDAlbum)');
		$valeursParam = array ( ':numero' => 1 , 
		':titre' => 'Where the Streets Have No Name', 
		':duree' => '5:36', 
		':IDAlbum' => $IDAlbum);
		$reqPiste->execute($valeursParam);
		*/
		
		$db->commit();
	}catch(PDOException $e) {
	
		$db->rollBack();
	}
}

if(isset($_POST['envoyer_piste']))
{
	$ID_Album = $_POST['ID_album'];
	$numero_piste = $_POST['numero_piste'];
	$titre_piste = $_POST['titre_piste'];
	$duree_piste = $_POST['duree_piste'];
	$reqPiste_form = $db->prepare("INSERT INTO piste (numero, titre, duree, ID_Album) VALUES (:numero, :titre, :duree, :ID_Album)");
	$reqPiste_form->bindParam(':numero', $numero_piste);
	$reqPiste_form->bindParam(':titre', $titre_piste);
	$reqPiste_form->bindParam(':duree', $duree_piste);
	$reqPiste_form->bindParam(':ID_Album', $ID_Album);
	$reqPiste_form->execute();
}

	
?>

<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
	</head>

	<body>
	<form method="post" align="center" action="" >
		<fieldset>
		<legend>Ajout d'un Album</legend>
		<label>Titre de l'album</label> : <input type="text" name="titre"/>
		<br/>
		<label>Annee de parution</label> : <input type="date" name="anneedeparution" />
		<br/>
		<label>Artiste</label> : <input type="text" name="artiste"/>
		<br/>
		<label>jaquette</label> : <input type="text" name="jaquette" placeholder="url d'une image..."/>
		<br/>
		
   <input type="submit" name="envoyer" value="Envoyer" id="envoyer"/>
	</fieldset>
	</form>
	
	
	<form method="post" align="center" action="" >
		<fieldset>
		<legend>Ajout d'une piste</legend>
		<label>ID de l'album</label> : <input type="text" name="ID_album"/>
		<br/>
		<label>Titre de la piste</label> : <input type="text" name="titre_piste" />
		<br/>
		<label>Numero de la piste</label> : <input type="number" name="numero_piste" />
		<br/>
		<label>duree de la piste(mn:sc)</label> : <input type="text" name="duree_piste"/>
		<br/>
		
   <input type="submit" name="envoyer_piste" value="Envoyer" id="envoyer"/>
	</fieldset>
	</form>
	</body>
</html>