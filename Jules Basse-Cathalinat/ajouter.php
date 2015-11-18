<?php
	include('connexion_bdd.php') ;

if (!empty($_POST['ajouter']))
{	

	$titre = $_POST["titre"] ;
	$resume = $_POST["resume"] ;
	//$id_realisateur = $_POST["id_realisateur"];
	$image = $_POST["image"] ;
	$mois = $_POST["mois"] ;
	$annee = $_POST["annee"] ;
	$csa = $_POST["csa"] ;
	$note_utilisateur = $_POST["note_utilisateur"] ;

		global $db;
	/*$sql2 = $db->prepare('INSERT INTO realisateur(id, prenom, nom) VALUES (:id_realisateur, :prenom, :nom)');
	$sql2->execute(array(
		"id_realisateur" => $id_realisateur,
		"prenom" => $prenom,
		"nom" => $nom
		)
	);*/
	$sql = $db->prepare('INSERT INTO film(titre, resume, id_realisateur, image, mois, annee, csa, note_utilisateur) VALUES (:titre, :resume, 53, :image, :mois, :annee, :csa, :note_utilisateur)');
	$sql->execute(array(
		"titre" => $titre,
		"resume" => $resume,
		"image" => $image,
		"mois" => $mois,
		"annee" => $annee,
		"csa" => $csa,
		"note_utilisateur" => $note_utilisateur
		)
	);
		

		
	}
?>

<html>
<?php
	include('head.php') ;
?>
	<head>
		<title>France-horreur</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
	</head>
	<body>
	<div>
	<form method="POST" action="" id="form_ajout">
		<fieldset id="fieldset_ajout">
		<legend id="legend_ajout">Ajouter un film : </legend>
		<label for="titre" >Titre</label>
		<input type="text" name="titre" placeholder="Titre" />
		<label for="image" >Image</label>
        <input type="file" class="form-control" name="image" placeholder="avatar">
		<label for="mois">Mois</label>
		<input type="text" name="mois" placeholder="mois" />
		<label for="annee">Annee</label>
		<input type="number" name="annee" placeholder="annee" />
		<label for="csa">Interdiction</label>
		<input type="csa" name="csa" placeholder="csa" />
		<label for="note_utilisateur">Note utilisateur</label>
		<input type="number" name="note_utilisateur" placeholder="note" />	
		<input type="submit"  name="ajouter" value="ajouter" />
		</fieldset>
		<fieldset id="fieldset_ajout2">
		<label for="resume">Resume</label>
		<textarea name="resume" rows=10 cols=40 /></textarea>
		</fieldset>
	

	</form>
	</body>
</div>	

</html>