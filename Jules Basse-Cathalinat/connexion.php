<!DOCTYPE html>
<html>
	<?php
	include('connexion_bdd.php');
	
	if(isset($_POST['mail']) || isset($_POST['mdp']))
			{
			if($_POST['mail']!="" && $_POST['mdp']!="")
			{
				$sql = 'SELECT COUNT(*) AS nb, id, nom, prenom FROM utilisateurs WHERE mail ="'.$_POST['mail'].'"
				AND mdp="'.$_POST['mdp'].'"';
				$result = $db->prepare($sql);
				$columns = $result->execute();
				$columns = $result->fetch();
				$nb = $columns['nb'];
				if($nb == 1)
				{							
					$_SESSION['utilisateur'] = $columns['nom'].' '.$columns['prenom'];					
					$_SESSION['id'] = $columns['id'];				
				}
				else
				{					
					echo "<div class=\"erreur_connexion\">Vos identifiants sont erronés</div>";					
				}
			}
			else
			{
				echo "<div class=\"erreur_connexion_champs\">Remplissez tous les champs</div>";
			}
		}
	
	if ( !empty($_SESSION) )
	{
		echo "<h4>Bonjour ".$_SESSION['utilisateur']. "</h4>" ;
		echo '<a href="deconnexion.php" > DECONNEXION</a>' ;
		echo '<a href="ajouter.php">Ajouter un film</a>' ;
	
	} else {
	
	?>
	
	<form method="POST" id="formulconnect"> 
		<h3>Connexion</h3>
		<input name="mail" type="email" placeholder="email">
		<input name="mdp" type="password" placeholder="mot de passe">
		<input type="submit" value="Se connecter">
	</form>
	<?php
	}
	
	?>
		
</html>