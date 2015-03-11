<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../styles/style.css" />
		<link rel="stylesheet" href="../styles/reset.css" />
		<title> labo dev-web </title>
	</head>
	
	<body>
		

	
		<header id="header">
		<?php
				include('connexion_bdd.php') ;
if( !empty($_SESSION) )
			{
				echo '<a href="recherche.php">Rechercher un utilisateur</a>' ;
				echo '-------------------------------------------------------------------------------------------------------' ;
				echo '------------------------------------------------------------------------------------------' ;
				echo '<a href="modifier.php">Modifier</a>' ;
			}		
				
		?>
			<div class="headeracceuil" > 
				<h1 class="titre">The Social Labs !!!</h1>
			</div>
		</header>
		
		<div id="menu" >
			<div class="acceuil"><a href="../index.php">ACCEUIL</a></div>
			<div class="connexion"><a href="connexion.php" align="left">CONNEXION</a></div>
			<div class="presentation"><a href="#">PRESENTATION</a></div>
			<div class="creer"><a href="creercompte.php">CREER VOTRE COMPTE</a></div>
		</div>
		
		<div id="main">
		<?php
					
		$db->query('SET nAMES utf8');
	if(!empty($_SESSION))
	{
		
		$id = $_SESSION['utilisateur_id'] ;
//$nom= '%'.$_POST["nom"].'%';
$sql = 'SELECT nom ,prenom, mail, mdp FROM utilisateurs WHERE utilisateur_id LIKE "'.$id.'" ; ';
$bdd = mysql_connect("127.0.0.1", "root", "");
mysql_query("SET NAMES UTF8") ;
mysql_select_db("sociallab", $bdd);
$id = mysql_query($sql) ;
if(!empty($id)){
	while($row = mysql_fetch_assoc($id)){

		echo "Votre nom :".$row["nom"].'</br>' ;
		echo "Votre prenom :".$row["prenom"].'</br>' ;
		echo "Votre mail :".$row["mail"].'</br>' ;
		echo "Votre mdp :".$row["mdp"].'</br>' ;
	
	}
}
else{
	echo "pas de résultat" ;
}
}
		
	
?>



		<div>
	</body>
</html>