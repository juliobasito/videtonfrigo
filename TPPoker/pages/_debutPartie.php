<?php
include("../autoload.inc.php");
include( "/../connexion_bdd.php");
 
if(isset($_POST['envoyer']))
{
	$sqlj1 = $db->prepare("CALL sauvegarderJoueur(:p_nom)");
	$sqlj1->bindParam(":p_nom", $_POST['premierjoueur']);
	$sqlj1->execute();
	$requetej1 = $sqlj1->fetch();
	$_SESSION['utilisateur1_id'] = $requetej1['ID'];
	$sqlj1->closeCursor();
	
	$sqlj2 = $db->prepare("CALL sauvegarderJoueur(:p_nom2)");
	$sqlj2->bindParam(":p_nom2", $_POST['secondjoueur']);
	$sqlj2->execute();
	$requetej2 = $sqlj2->fetch();
	$_SESSION['utilisateur2_id'] = $requetej2['ID'];
	
	if(isset ($_SESSION['utilisateur2_id']))
		{
		if (isset ($_SESSION['utilisateur1_id']))
		{
			header('location:finPartie.php');
		}
		}
			
}
?>