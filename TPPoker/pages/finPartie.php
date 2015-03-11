<?php
require_once "../autoload.inc.php";
require_once "../connexion_bdd.php";

$Paquet1 = new Paquet();
$Paquet1->melanger();
$joueur1 = new joueur($_SESSION['utilisateur1_id']);
$joueur2 = new joueur($_SESSION['utilisateur2_id']);
$joueur1->setCarte1($Paquet1->distribuer());
$joueur1->setCarte2($Paquet1->distribuer());
$joueur2->setCarte1($Paquet1->distribuer());
$joueur2->setCarte2($Paquet1->distribuer());
$Partie1 = new Partie($joueur1, $joueur2);
for ($indice = 0; $indice<5; $indice++)
{
	$Partie1->ajouterCarteTirage($Paquet1->distribuer());
}

echo "carte du joueur 1 :";
$joueur1->getCarte1();
$joueur1->getCarte2();
echo "</br></br>";

echo "carte du joueur 2 :";
$joueur2->getCarte1();
$joueur2->getCarte2();
echo "</br></br>";
echo "Carte du tirage : ";
foreach($Partie1->leTirage as $afficher)
{
	$afficher->Afficher();
}

?>