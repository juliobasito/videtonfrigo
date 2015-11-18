<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
  </head>
<body>
  <?php
include('connexion_bdd.php');
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idtitre"] ;
 
  //requête SQL:
  $sql = 'SELECT *
            FROM ajout_livre
			WHERE id = '.$id .'';
  //exécution de la requête:
  $requete = $db->prepare($sql);
 
  //affichage des données:
  $requete->execute() ;
	$requete->fetch() ;
$result = $requete->fetchAll(PDO::FETCH_ASSOC) ;
echo $result['id'] ;

  ?>
<form name="insertion" action="modifier3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>Titre</td>

       <td><input type="text" name="titre" value="<?php echo $result['titre'] ;?>"></td>
    </tr>
    <tr align="center">
      <td>Auteur</td>
      <td><input type="text" name="auteur" placeholder="auteur" value="<?php echo $result['auteur']  ;?>"></td>
    </tr>
    <tr align="center">
      <td>Date</td>
      <td><input type="date" name="date" value="<?php echo($result['date']) ;?>"></td>
    </tr>
    <tr align="center">
      <td>Genre</td>
      <td><input type="text" name="genre" value="<?php echo($result['genre']) ;?>"></td>
    </tr>
    <tr align="center">
      <td>image</td>
      <td><input type="text" name="image" value="<?php echo($result['image']) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>
  <?php

  
  ?>
</body>
</html>