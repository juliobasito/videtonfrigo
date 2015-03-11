<?php	

function __autoload($nomClasse)
{
	require_once"/class/".$nomClasse.".class.php";
}

	$moi = new Enfant("Jean");
	$toi = new Enfant("nous","marie");
	$lui = new Enfant("merci", "luc", 12);
	
	
	
	$jeu = new Jeu();
	$jeu->VeutJouer(new Enfant('francois'));
	$jeu->VeutJouer(new Enfant('mathieu'));
	$jeu->VeutJouer(new Enfant('Jules'));
	$jeu->VeutJouer(new Enfant('maxime'));
	$jeu->VeutJouer(new Enfant('thibault'));
	$jeu->VeutJouer(new Enfant('louis'));
	
	$jeu->Jouer();

	

?>