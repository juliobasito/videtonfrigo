<?php
	session_start() ;
	try {
		$bdd = new PDO ("mysql:host=localhost;dbname=tpPHP","root","");
	} catch(Exception $e) {
		die("Erreur".$e->getMessage());
	}

	
		if(isset($_POST["utilisateur"]) AND $_POST['utilisateur']!="" AND isset($_POST["motDePasse"]) AND $_POST['motDePasse']!="") {
			$req = $bdd->prepare("SELECT *
									FROM utilisateurs
									WHERE
									utilisateur=:utilisateur AND
									motDePasse=:motDePasse ");
									
			$reponse = $req->execute(array(
						"utilisateur"=>$_POST["utilisateur"],
						"motDePasse"=>$_POST["motDePasse"]));
		
			$donnees = $req->fetch();
		var_dump($donnees);
		if($donnees){
			foreach($donnees as $key => $value){
				$_SESSION[$key]=$value;
				echo "bite1" ;
			}
			
			header('location:../pages/profil.php');
				exit;
			}
			$req->closeCursor();
		}
		else
		{
			header('location:../index.php?erreur=form');
			exit;
		}
	?>