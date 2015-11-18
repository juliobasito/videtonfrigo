<?php

	require_once "class/Enfant.class.php";
	require_once "class/Ronde.class.php" ;
	require_once "class/Lejou.class.php" ;
	
	$jeu = new Lejeu();
	$jeu.VeutJouer(new Enfant("Alain"));
	

?>
