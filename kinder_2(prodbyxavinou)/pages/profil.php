<?php
	
	$db_database=mysql_connect('localhost', 'root', '');
	
	mysql_select_db("kinder", $db_database);
	
	if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["age"]) && isset($_POST["tel"]) && isset($_POST["password"]) && isset($_POST["password2"]))
		{
		
			if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["mail"]) && !empty($_POST["age"]) && !empty($_POST["tel"]) && !empty($_POST["password"]) && !empty($_POST["password2"]))
			{
				
				$nom=mysql_real_escape_string($_POST["nom"]);
				$prenom=mysql_real_escape_string($_POST["prenom"]);
				$mail=mysql_real_escape_string($_POST["mail"]);
				$age=mysql_real_escape_string($_POST["age"]);
				$tel=mysql_real_escape_string($_POST["tel"]);
				$password=mysql_real_escape_string($_POST["password"]);
				$password2=mysql_real_escape_string($_POST["password2"]);
				
				mysql_query("INSERT INTO kinder(nom, prenom, mail, age, telephone, motdepasse, confirmation)
					VALUES ('".$nom."', '".$prenom."', '".$mail."', '".$age."', '".$tel."', '".$password."', '".$password2."')")
					OR DIE(mysql_error());
			}
			else
			{
				echo "Remplissez tous les champs s'il vous plait" ;
			}
		}
	
?>