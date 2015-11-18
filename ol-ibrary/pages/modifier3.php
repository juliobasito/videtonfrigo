<?php
include('connexion_bdd.php');

  $titre    = $_POST["titre"] ;
  
  $auteur = $_POST["auteur"] ;
  
  $date = $_POST["date"] ;

  $genre       = $_POST["genre"] ;

  $image      = $_POST["image"] ;

  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = 'UPDATE ajout_livre
            SET titre         = "'.$titre.'", 
	          auteur     = "'.$auteur.'",
		  date    = "'.$date.'",
		  genre          = "'.$genre.'",
		  image = "'.$image.'"
           WHERE id = '.$id.' ';
		  
 
  //exécution de la requête SQL:
  $requete = $db->prepare($sql) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete->execute())
  {
    echo("La modification à été correctement effectuée") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>