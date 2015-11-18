<?php

	/*session_start() ;
	try {
		$bdd = new PDO ("mysql:host=localhost;dbname=kinder","root","");
	} catch(Exception $e) {
		die("Erreur".$e->getMessage());
	}

	$mail = mysql_real_escape_string($_POST["mail"]) ;
	$mdp = mysql_real_escape_string($_POST["mdp"]) ;
	
		if(isset($mail) AND $mail!="" AND isset($mdp) AND $mdp!="") {
			$req = $bdd->prepare("SELECT *
									FROM kinder
									WHERE
									mail=:mail AND 
									mdp=:mdp AND
									nom=:nom AND
									prenom=:prenom");
									
			$reponse = $req->execute(array(
						"mail"=>$_POST["mail"],
						"mdp"=>$_POST["mdp"],
						"nom"=>$_POST["nom"],
						"prenom"=>$_POST["prenom"]));
		echo "raté" ;
			$donnees = $req->fetch();
			echo "raté9" ;
			echo $_POST["mail"] ;
			echo $_POST["mdp"] ;
			echo $_GET["nom"] ;
			echo $_GET["prenom"] ;
			var_dump($donnees) ;
		if($donnees){
			echo "raté8" ;
			foreach($donnees as $key => $value){
				$_SESSION[$key]=$value;
			}
			echo "raté2" ;
			header('location:acceuil.php');
				exit;
			}
			$req->closeCursor();
		}
		else
		{
			echo "raté3" ;
			header('location:../index.php?erreur=form');
			exit;
		}*/
		

