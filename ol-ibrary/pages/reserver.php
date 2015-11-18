<html>
  <head>
    <title>OLIBRARY</title>
  </head>
<body>
  <?php
    //connection au serveur:
include('connexion_bdd.php');
$userid = $_SESSION['id'] ;

    //requête SQL:
    $sql = "SELECT id, titre, auteur, date, genre
	      FROM ajout_livre
	      ORDER BY titre" ;
		  
  $requete = $db->prepare($sql);
 
  //affichage des données:
  if($requete->execute() )
  {
	while($result = $requete->fetch()) {
 
       echo(
           "<div align=\"center\">"
           .$result['titre']." Ecrit par ".$result['auteur'].". Date de sortie : ".$result['date'].", Genre : ".$result['genre']
           ." <a href=\"reserver2.php?idtitre=".$result['id']."&iduser=".$userid."\">Reserver</a></div>\n"
       ) ;
    }
	}
	
  ?>
</body>
</html>