<?php
	
include('connexion_bdd.php');	

if(!empty($_POST['Envoyer']))
{       

	if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["age"]) && isset($_POST["tel"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST["image_src"]))
		{
		
			if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["age"]) && !empty($_POST["tel"]) && !empty($_POST["password"]) && !empty($_POST["password2"]) && !empty($_POST["image_src"]))
			{
				
				$nom=$_POST["nom"];
				$prenom=$_POST["prenom"];
				$mail=$_POST["mail"];
				$age=$_POST["age"];
				$tel=$_POST["tel"];
				$password=$_POST["password"];
			$sql = 'INSERT INTO tbz_table(nom, prenom, mail, age, telephone, motdepasse)
					VALUES (:nom, :prenom, :mail, :age, :tel, :password)';
					echo $sql ;
					$result = $db->prepare($sql);
				$columns = $result->execute(array(
											':nom'=>$nom,
											':prenom'=>$prenom,
											':mail'=>$mail,
											':age'=>$age,
											':tel'=>$tel,
											':password'=>$password
									));
				$columns = $result->fetch();
				 $_SESSION['prenom'] = $_POST["prenom"] ;
				 $_SESSION['id'] = $_POST["utilisateur_id"] ;
				 header('location:pages/page.php') ;
				 

			
			}
			else
			{
				echo "Remplissez tous les champs s'il vous plait" ;
			}
		}

    }

?>

<! DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="../styles/styleinscription.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/style2.css" />

		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'/>
	</head>
	
	<body>
	
	
		<div class="arrondi">
			<h1 align="center" > INSCRIPTION </h1>
	<form method="post" align="center" id="inscription" enctype="multipart/form-data">
		<fieldset>
		<strong><h3>Vos coordonnées</h3></strong>
		<div id="form">
		<label for="nom">Votre nom</label> : <input type="text" name="nom" id="nom"/>
		<br/>
		<label for="prenom">Votre prénom</label> : <input type="text" name="prenom" id="prenom" />
		<br/>
		<label for="mail">Votre mail</label> : <input type="email" name="mail"  id="mail" placeholder="Ex : john.doe@doe.com"/>
		<br/>
		<label for="age">Votre age</label> : <input type="number" name="age" id="age"/>
		<br/>
		<label for="telephone">Votre télephone</label> : <input type="tel" name="tel" id="telephone" placeholder="Ex : 06 06 75 15 32"/>
		<br/>
		<label for="motdepasse">Votre mot de passe</label> : <input type="password" name="password" id="motdepasse" />
		<br/>
		<label for="motdepasse2">Confirmation</label> : <input type="password" name="password2" id="motdepasse2" /> 
		
		</br>
   <a href="accueil.php"><input type="submit" value="Envoyer" name="Envoyer" id="envoyer"/></a>
		</div>
	</form></fieldset>
	</form>
		</div>
	
	
	</body>
	
</html>
