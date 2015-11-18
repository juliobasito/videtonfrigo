<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
  <?php
include('connexion_bdd.php');
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id_titre  = $_GET["idtitre"] ;
  $id_user = $_GET["iduser"] ;
 
  //requête SQL:
  $sql = 'UPDATE utilisateurs
	SET reservation_id = "'.$id_titre.'"
	WHERE id= '.$id_user.' ' ;
 
  //exécution de la requête:
  $requete = $db->prepare($sql);
 
  //affichage des données:
  $requete->execute() ;
  header('location:moncompte.php');
?>
</body>
</html>