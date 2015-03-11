<?php
session_start();
include("../connexion_bdd.php");
  // Si on est connecté on est redirigé sur profil
  if(isset($_SESSION['id']) && $_SESSION['id']>0){
    header("location:index.php?section=profil");
    exit;
  //Sinon on passe par le formulaire
  }elseif(isset($_POST['utilisateur']) AND $_POST['utilisateur']!="" AND isset($_POST['motDePasse']) AND $_POST['motDePasse']!="") // On a le nom et le prénom
  {
    
    // On récupère tout le contenu de la table jeux_video
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE utilisateur=:utilisateur AND motDePasse=:motDePasse'); 
    //on passe en paramètre de la requete nos variables $_POST
    $reponse = $req->execute(array(
      'utilisateur' => $_POST['utilisateur'],
      'motDePasse' => $_POST['motDePasse']
      ));
    $donnees = $req->fetch();   
    if($donnees){ 
      foreach ($donnees as $key => $value) {
        $_SESSION[$key]=$value;
      }
      header('location:../../index.php?section=profil');
      exit;
    }else{
      header('location:../../index.php?erreur=inconnu');
      exit;
    }
    $req->closeCursor();
  }
  else // Il manque des paramètres, on avertit le visiteur
  {
    header('location:../../index.php?erreur=form');
    exit;
  }
?>
