<?php
namespace Forum;
use PDO;
require_once('Technique/start.php');


// appeler la procédure stockée de la base infoMembre (:p_ID)

// recuperation données (PDO::FETCH_CLASS)

// affichage
$IDMembre = $_SESSION["mail"];
echo "<h1>Bonjour  $IDMembre !</h1>";

$requetemembre = "CALL infoMembre(:ID)";

	$info = $db->prepare($requetemembre);
    $info->bindValue (':ID',$IDMembre);
	$info->setFetchMode(PDO::FETCH_CLASS, "Membre");
    $info->execute();
	while ($afficherinfo = $info->fetch() )
	{
		echo "<strong>nom</strong> = ".$afficherinfo['nom'] ;
		echo "</br>";
		echo "<strong>prenom</strong> = ".$afficherinfo['prenom'] ;
		echo "</br>";
		echo "<strong>adresse</strong> = ".$afficherinfo['adresse'] ;
		echo "</br>";
		echo "<strong>complément</strong> = ".$afficherinfo['complement'] ;
		echo "</br>";
		echo "<strong>Code Postal</strong> = ".$afficherinfo['codepostal'] ;
		echo "</br>";
		echo "<strong>Ville</strong> = ".$afficherinfo['ville'] ;
		echo "</br>";
		echo "<strong>Telephone</strong> = ".$afficherinfo['telephone'] ;
		echo "</br>";
		echo "<strong>mail</strong> = ".$afficherinfo['mail'] ;
		echo "</br>";
		echo "<strong>Indice du CSP</strong> = ".$afficherinfo['csp'] ;
		echo "</br>";
		echo "<strong>Mot De Passe</strong> = ".$afficherinfo['motdepasse'] ;
		
	}

/*$listecsp = "CALL listeCsp()";

	$infocsp = $db->prepare($listecsp);
	$infocsp->fetch(PDO::FETCH_CLASS, "Csp");

	$infocsp->execute();

	while($csp =  $infocsp->fetch())
	{
		echo "nard";
		echo $csp['code']." - ".$csp['libelle']; 
	}
	

    */
?>
