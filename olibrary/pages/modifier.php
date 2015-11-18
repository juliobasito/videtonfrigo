<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../styles/style.css" />
		<link rel="stylesheet" href="../styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
		
<form action="" method="POST"/>
		<label>Entrez le titre du film à modifier : <input type="text" name="titre_modif" /></label>
		<input type="submit" name="modifier" value="modifier" />
		</form>
	
		<header id="header">
		
		<?php
				
				
				if(!empty($_POST['modifier']))
				{
				$titre_modif = mysql_real_escape_string($_POST['titre_modif']) ;
				function affichage_auteurs($titre_modif){
include('connexion_bdd.php') ;
    $datas = NULL;
    $sql = 'SELECT * FROM ajout_livre WHERE titre ="'.$titre_modif.'" ;';
    $reponse = $db->query($sql);
    if ($reponse != false) {
        while ( $row = $reponse->fetch() ) {
            $datas[] = $row;
        }
        $reponse->closeCursor();
    }
    
    return $datas;
}

$datas = affichage_auteurs($titre_modif) ;
		

if(!empty($titre_modif)){
	if ($datas!=null && count($datas)>0) foreach ($datas as $item) { echo '<br/><br/><br/>titre : '.$item['titre']; echo '<br/>auteur : '.$item['auteur'] ; echo '<br/>date : '.$item['date'] ; echo '<br/>genre : '.$item['genre'] ; } 
}
else{
	echo "pas de résultat" ;
}

		
	}
?>

<?php
	
		if(!empty($titre_modif))
		{
		
		echo '<form method="POST" action="" />' ;
		echo '<br/><br/><br/><label> Nouveau titre : <input type="text" name="newtitre" /></label>' ;
		echo '<br/><label> Nouvel auteur : <input type="text" name="newauteur"/></label>' ;
		echo '<br/><label> Nouvelle date : <input type="date" name="newdate" /></label>' ;
		echo '<br/><label> Nouveau genre : <input type="text" name="newgenre" /></label>' ;
		echo '<br/><input type="submit" name="envoyer" value="envoyer" />' ;

		if(!empty($_POST["envoyer"]))
	{ echo "co" ;
		$newtitre = mysql_real_escape_string($_POST["newtitre"]) ;
		$newauteur = mysql_real_escape_string($_POST["newauteur"]) ;
		$newdate = mysql_real_escape_string($_POST["newdate"]) ;
		$newgenre = mysql_real_escape_string($_POST["newgenre"]) ;
		
		if(!empty($newtitre))
		{
		echo "cool" ;
		$sql  = 'UPDATE ajout_livre SET titre="'.$newtitre.'" WHERE titre = "'.$titre_modif.'" ';
		}
		
		if(!empty($newauteur))
		{
		$sql  = 'UPDATE ajout_livre SET auteur="'.$newauteur.'" WHERE titre = "'.$titre_modif.'" ';
		}
		if(!empty($newdate))
		{
		$sql  = 'UPDATE ajout_livre SET date="'.$newdate.'" WHERE titre = "'.$titre_modif.'" ';
		}
		if(!empty($newgenre))
		{
		$sql  = 'UPDATE ajout_livre SET genre="'.$newgenre.'" WHERE titre = "'.$titre_modif.'" ';
		}
		
		$result = $db->prepare($sql);
				$columns = $result->execute();
				$columns = $result->fetch();
	}
	}
	?>
		<div>
	</body>
</html>