<?php

// on appelle la page de script qui va nous etre utile
include_once('modele/site/missions.php');

//On v�rifie si une action est pass�e
if(isset($_POST['action'])){
	$action = $_POST['action'];
}elseif(isset($_GET['action'])){
	$action = $_GET['action'];
}else{
	$action = "";
}
//Si il y a une action, on execute le script correspondant
if($action!=""){
	switch ($action) {
		case 'add':
			set_mission($_POST);
			break;
		case 'update':
			update_mission($_POST);
			break;
		case 'delete':
			delete_mission($_GET);
			break;
		
		default:
			# code...
			break;
	}
}

//On pr�pare la fonction d'appelle
$param['id_utilisateur']=$_SESSION['id'];
//On fait appel � la fonction de r�cup�ration
$missions = get_missionsByUser($param, 0, 5);

// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach($missions as $cle => $mission)
{
    $missions[$cle]['titre'] = htmlspecialchars($mission['titre']);
    $missions[$cle]['lieu'] = htmlspecialchars($mission['lieu']);
    $missions[$cle]['description'] = nl2br(htmlspecialchars($mission['description']));
}

// On affiche la page (vue)
include_once('vue/site/profil.php');

