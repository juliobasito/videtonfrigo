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
                $userid = $_SESSION['id'] ;
				$id_livre = $_GET['variable'] ;
				

            global $db;

     

               //requête SQL:
              $sql = $db->prepare('UPDATE utilisateurs SET reservation_id ='.$id_livre.' WHERE id = '.$userid.'');

              $exec=$sql->execute() ;
			  
			  header('location: moncompte.php');
/*



foreach($livres as 
  ?>
</body>

</html>

