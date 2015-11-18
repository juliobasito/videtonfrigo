<?php 
//Inclusion de mon header
include("includes/header.php"); 
?>
      <?php 
              //Gestion des erreurs suivant la connexion
              if(isset($_GET["erreur"])){
                switch ($_GET["erreur"]) {
                  case 'inconnu':
                    echo "Utilisateur inconnu";
                    break;
                  case 'form':
                    echo "Vous devez remplir les champs";
                    break;
                  default:
                    # code...
                    break;
                }
              }
            ?>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php // le formulaire pointe vers le script de connexion ?>
        <form class="form-inline text-center" role="form" method="POST" action="modele/site/connexion.php">
          <div class="form-group">
            
            <label class="sr-only" for="utilisateur">Utilisateur</label>
            <input type="text" class="form-control" id="utilisateur" name="utilisateur" placeholder="Utilisateur">
          </div>
          <div class="form-group">
            <label class="sr-only" for="motDePasse">Mot de passe</label>
            <input type="password" class="form-control" id="motDePasse" name="motDePasse" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-default">Se connecter</button>
        </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <?php // le formulaire pointe vers le script d'inscription ?>
        <?php // pour dire que le formulaire va envoyer un fichier il faut rajouter en attribut du form : enctype="multipart/form-data" ?>
        <form class="form-inline text-center" role="form" method="POST" action="modele/site/inscription.php" enctype="multipart/form-data">
          <div class="form-group">
            <label class="sr-only" for="utilisateur">Utilisateur</label>
            <input type="text" class="form-control" id="utilisateur" name="utilisateur" placeholder="Utilisateur">
          </div>
          <div class="form-group">
            <label class="sr-only" for="motDePasse">Mot de passe</label>
            <input type="password" class="form-control" id="motDePasse" name="motDePasse" placeholder="Password">
          </div>
          <div class="form-group">
            <label class="sr-only" for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
          </div>
          <div class="form-group">
            <label class="sr-only" for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
          </div>
          <div class="form-group">
            <label class="sr-only" for="avatar">Avatar</label>
            <input type="file" class="form-control" id="avatar" name="avatar" placeholder="avatar">
          </div>
          <button type="submit" class="btn btn-default">S'inscrire'</button>
        </form>
        </div>
      </div>
<?php 
//Inclusion du footer
include("includes/footer.php"); 
?>