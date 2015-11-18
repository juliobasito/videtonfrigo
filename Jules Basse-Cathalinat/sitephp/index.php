<?php
include('pages/connexion_bdd.php');
function set_mission($param)
{
    global $bdd;
            
    $req = $bdd->prepare('INSERT INTO missions (id_utilisateur,prenom,nom,description) VALUES(?, ?, ?, ?)');
    $req->execute(array($param['id_utilisateur'],$param['prenom'],$param['nom'],$param['description']));
    
    return $bdd->lastInsertId();
}

function update_mission($param)
{
    global $bdd;
    
        
    $req = $bdd->prepare('UPDATE missions SET prenom=:prenom,nom=:nom,description=:description WHERE id=:id');
    $req->execute(array(
    	'prenom' => $param['prenom'], 
    	'nom' => $param['nom'], 
    	'description' => $param['description'],
    	'id' => $param['id']
    	));
    
    return $bdd->lastInsertId();
}

function get_mission($param)
{
    global $bdd;
    
    $limit = (int) 1;
        
    $req = $bdd->prepare('SELECT * FROM missions WHERE id=:id LIMIT :limit');
    $req->bindParam(':id', $param['id'], PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $mission = $req->fetch(); 
    
    return $mission;
}

function delete_mission($param)
{
    global $bdd;
        
    $req = $bdd->prepare('DELETE FROM missions WHERE id=:id');
    $req->bindParam(':id', $param['id'], PDO::PARAM_INT);
    $req->execute();
    $mission = $req->fetch(); 
    
    return $mission;
}

function get_missionsByUser($param,$offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT * FROM missions WHERE id_utilisateur=:id_utilisateur ORDER BY id DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->bindParam(':id_utilisateur', $param['id_utilisateur'], PDO::PARAM_INT);
    $req->execute();
    $missions = $req->fetchAll();
    
    return $missions;
}

function get_missions($offset, $limit)
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
        
    $req = $bdd->prepare('SELECT * FROM missions ORDER BY id DESC LIMIT :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    $missions = $req->fetchAll();
    
    return $missions;
}

?>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Nouvelle mission</h2>
          <form class="form text-center" role="form" method="POST" action="index.php?section=profil">
            <div class="form-group">
              <label class="sr-only" for="prenom">prenom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom">
            </div>
            <div class="form-group">
              <label class="sr-only" for="nom">nom</label>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="nom">
            </div>
            <div class="form-group">
              <label class="sr-only" for="description">Description</label>
              <textarea class="form-control" id="description" name="description" placeholder="description"></textarea>
            </div>
            <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id'];?>" />
            <input type="hidden" name="action" value="add" />
            <button type="submit" class="btn btn-default">Ajouter</button>
          </form>
        </div>
      </div>

       <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Mes missions</h2>
          <?php
          
          foreach($missions as $mission)
          {
          ?>
          <form class="form text-center" role="form" method="POST" action="index.php?section=profil">
            <div class="form-group">
              <label class="sr-only" for="prenom">prenom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" placeholder="prenom" value="<?php echo $mission['prenom']; ?>">
            </div>
            <div class="form-group">
              <label class="sr-only" for="nom">nom</label>
              <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" value="<?php echo $mission['nom']; ?>">
            </div>
            <div class="form-group">
              <label class="sr-only" for="description">Description</label>
              <textarea class="form-control" id="description" name="description" placeholder="description"><?php echo $mission['description']; ?></textarea>
            </div>
					
            <input type="hidden" name="id_utilisateur" value="<?php echo $_SESSION['id'];?>" />
            <input type="hidden" name="id" value="<?php echo $mission['id']; ?>" />
            <input type="hidden" name="action" value="update" />
            <button type="submit" class="btn btn-default">Modifier</button>
          </form>
          
          <em><a href="index.php?section=profil&action=delete&id=<?php echo $mission['id']; ?>">supprimer</a></em>
          <?php
          }
          ?>
          </div>
      </div>
<?php include("includes/footer.php"); ?>
      
