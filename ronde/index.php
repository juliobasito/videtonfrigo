<?php 
mysql_query("SET NAMES utf8");
	
	/*function __autoload($nomclasse)
	{
		require_once "class/".$nomClasse.".class.php";
	}*/
	
	require_once "class/Enfant.class.php";
	require_once "class/Ronde.class.php" ;
	
	$moi = new Enfant("Jean", "Delarue", 11);
	$toi = new Enfant("Marcel","Henry", 10);
	$lui = new Enfant("Luc", "arne", 12);
	$nous = new Enfant("jean", "til", 12);
	$vous = new Enfant("rat", "touzghar", 14);
	
	echo $laRonde->toString();
	echo 
	
/*	$ronde = new Ronde();
	
	$ronde->ajouterEnfant($moi);
	$ronde->ajouterEnfant($toi);
	$ronde->ajouterEnfant($lui);
	$ronde->ajouterEnfant($nous);
	$ronde->ajouterEnfant($vous);
	
	echo 'Nous sommes '.$ronde->combienEnfant().' a jouer <br>';
	echo 'Le jeu peut commencer !!' ;
	
	$premierEnfant = $ronde->premierEnfant();
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();
	echo '<br>Nombre d\'enfant dans la ronde : '.$ronde->combienEnfant();
	
	while($ronde->combienEnfant() > 1)
	{
	echo '</br></br>Les enfants s\'avancent';
	$ronde->avancer();
	$premierEnfant = $ronde->premierEnfant();
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();
	echo '<br>Nombre d\'enfant dans la ronde : '.$ronde->combienEnfant();
	
	echo '</br></br>Premier éliminé !!';
	$ronde->sortirPremierEnfant();
	$premierEnfant = $ronde->premierEnfant();
	echo 'Le premier enfant de la ronde est : '.$premierEnfant->getPrenom();
	echo '<br>Nombre d\'enfant dans la ronde : '.$ronde->combienEnfant();
	}


	
	
	

	
	
	
	
	
	
	*/
	
	
?>
