<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("/autoload.inc.php");






$unTerrain = new Terrain ("Av Champs Elysees", 350, "bleu", 25);
$uneGare = new Gare ("Gare Saint-Lazarre", 200);
$uneCompagnie = new COmpagnie ("Compagnie Eau et Electricite", 125);

/*
$unePropriete = $unTerrain; $unePropriete->calculerLoyer();
$unePropriete = $uneGare; $unePropriete->calculerLoyer();
$unePropriete = $uneCompagnie; $unePropriete->calculerLoyer();
*/
$monPortefeuille = new Portefeuille ();








$monPortefeuille->toucher (1000);

try {
$monPortefeuille->acheter ($unTerrain);
$monPortefeuille->acheter ($uneGare);
$monPortefeuille->acheter ($uneCompagnie);
$monPortefeuille->afficherPatrimoine();
}
catch (Exception $ex)
{
    echo $ex->getMessage();
}

/*foreach ($monPortefeuille->getProprietes() as $laPropriete)
    $laPropriete->calculerLoyer();*/
foreach($monPortefeuille as $lapropriete) 
	echo $lapropriete ->toString();
foreach ($unTerrain as $x)
	echo $x;
?>

