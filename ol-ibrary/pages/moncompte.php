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
			<h2> 
				<?php
				include('connexion_bdd.php');
				echo "COMPTE de ".$_SESSION['utilisateur'] ;
				?> 
			</h2>
		</header>
		<div id="wrapper">
			<div id="encart_moncompte">
				<?php 
					echo "pseudo: ".$_SESSION['utilisateur']. "<br/><br/>" ;
					echo "mail: ".$_SESSION['mail']. "<br/><br/>";
					echo "mdp: ".$_SESSION['mdp']. "<br/><br/>";
					
					   global $db;
     
					$sql = $db->prepare('SELECT * FROM ajout_livre JOIN utilisateurs
					ON ajout_livre.id = utilisateurs.reservation_id WHERE utilisateurs.id='.$_SESSION['id'].'' );
					$exec=$sql->execute() ;
					$livres = $sql->fetchAll(PDO::FETCH_ASSOC) ;
					foreach($livres as $livre)
					{
						echo '<p>Ma reservation : '.$livre['titre'].' ecrit par '.$livre['auteur'].'.</p>' ;
					}
					



					
				?>
			</div>
		</div>
		<footer>

		</footer>
	</body>
</html>