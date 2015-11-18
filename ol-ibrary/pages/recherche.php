<?php
	include('connexion_bdd.php');
	if(!empty($_POST["action"]))
	{
		$title= '%'.$_POST["titre_modif"].'%';
		$sql = 'SELECT * FROM ajout_livre WHERE titre LIKE "'.$title.'" ORDER BY titre; ';

		$requete = $db->prepare($sql);
  
	
	
?>

<! DOCTYPE HTML>
<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="../styles/style.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<header>
			<a href="../index.php"><h1>The Social' Lab</h1></a>
			<h2> Rechercher un ami, 
				<?php 
				if(!empty($_SESSION['utilisateur']))
				{
					echo $_SESSION['utilisateur'];
					}
					 ?> </h2>
		</header>
		<div id="wrapper">
			<div id="encart_recherche">
			<form action="" class="formulaire" method="POST">
				<input id="barre_recherche" type="text" name="titre_modif" placeholder="recherche.."/>
				<input id="recherche_submit" name="action" type="submit" value="rechercher" />
			</form>
        	</div>
		</div>
		<?php
				if($requete->execute() )
		{
			if($requete->rowCount()) {
				while($result = $requete->fetch()) {
		 
			   
					echo "<div id='btn_ajouter'>" ;
					echo "<h2>".$result['titre']."</h2>" ;
					echo "<p>Ecrit par".$result['auteur'].".</p>" ;
			?>
					<img src ="<?php echo $result['image'] ?>" alt ="image" width="225" height="300" />
			<?php
					echo "<p>Date de sortie :".$result['date'].".</p>" ;  
				}
			}
			else{
				echo "Pas de résultat" ;
			}
		}
	?>
		</div><br/><br/><br/>
	<?php
	}
	?>
		<a href="afficher.php"><div id="recherche_submit">
			Afficher tout les resultats
			</div></a>
		<footer>

		</footer>
	</body>
</html>