<!DOCTYPE html>
<html>
  <head>
    <title>modification de données en PHP :: partie2</title>
    <link href="../styles/style.css" rel="stylesheet" type="text/css" />
  </head>
    <header>
    <a href="../index.php"><h1>The Social' Lab</h1></a>
    <h2>Resultat de la recherche</h2>
   </header>

      <body>
         <?php

           include('connexion_bdd.php');
                echo "search" ;

            global $db;

			   $recherche= '%'.$_GET["search"].'%';

     

               //requête SQL:
              $sql = $db->prepare('SELECT *
              FROM ajout_livre
              WHERE titre LIKE "'.$recherche.'"
              ORDER BY titre');
              $exec=$sql->execute() ;
              $livres = $exec->fetchAll(PDO::FETCH::ASSOC)




foreach($livres as $livre)
{

                    echo "<div id='btn_ajouter'>" ;

                                        echo "<h2> '".$livre['titre']."'</h2>" ;
                                        echo "<p>Ecrit par'".$livre['auteur']."$
                                        echo "<img src ='".$livre['image']."' a$
                                        echo "<p>Date de sortie :'".$livre['dat$
               echo "</div>" ;

}
  ?>
</body>

</html>

