<?php

require_once './autoload.inc.php' ;

	
	$jeu = new Jeu();
	
	$jeu->veutJouer(new Enfant("Alain"));
	$jeu->veutJouer(new Enfant("Bernard"));
	$jeu->veutJouer(new Enfant("Jean"));
	$jeu->veutJouer(new Enfant("Joachim"));
	$jeu->veutJouer(new Enfant("Killian"));
	$jeu->veutJouer(new Enfant("margaux"));
	$jeu->veutJouer(new Enfant("nous"));
	$jeu->veutJouer(new Enfant("touzghar"));
	$jeu->veutJouer(new Enfant("jean"));
	$jeu->veutJouer(new Enfant("luc"));
	
	echo "<br/> nous sommes " . $jeu->combien() . "enfants à jouer ! <br/>";
	
	
	$moi = new Enfant('Michel');
	$laRonde = new Ronde();
	$laRonde = entrer($moi);
	$laRonde->entrer($moi);
	$laRonde->entrer(new Enfant ('caline'));
	$laRonde->entrer(new enfant('Bernard'));
	echo "Il y a ".$laRonde->Combien()."enfants";
	?>
