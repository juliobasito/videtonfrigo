<html>
  <head>
    <title>OLIBRARY</title>
  </head>
<body>
  <?php
    //connection au serveur:
include('connexion_bdd.php');


    //requête SQL:
    $sql = "SELECT *
	      FROM ajout_livre
	      ORDER BY titre" ;
		  
  $requete = $db->prepare($sql);
 
  //affichage des données:
  if($requete->execute() )
  {
	while($result = $requete->fetch()) {
 
      echo "<div id='btn_ajouter'>" ;
					echo "<h2>".$result['titre']."</h2>" ;
					echo "<p>Ecrit par".$result['auteur'].".</p>" ;
			?>
					<img src ="<?php echo $result['image'] ?>" alt ="image" width="225" height="300" />
			<?php
					echo "<p>Date de sortie :".$result['date'].".</p>" ;
					echo '<a href="modifier2.php?idtitre='.$result['id'].'">Modifier</a>' ;
				}
    }
	
  ?>
</body>
</html>