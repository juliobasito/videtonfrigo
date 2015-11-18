<?php
	
	$ma_requete = 'SELECT * FROM ma_table WHERE utilisateur_id = 5';
	
	$prepa_marequete = $db->prepare($ma_requete);
	
	$exec_marequete = $prepa_marequete->execute();
	
	while($mes_donnees = $prepa_marequete->fetch()) {
		echo '<div>'.$mes_donnees['utilisateur_id'].'</div>';
		echo '<div>'.$mes_donnees['nom_user'].'</div>';
		echo '<div>'.$mes_donnees['prenom_user'].'</div>';
	}
	
?>