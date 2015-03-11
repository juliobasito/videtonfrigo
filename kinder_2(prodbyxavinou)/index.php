<?php

include('pages/connexion_bdd.php') ;

if(!empty($_POST["envoyer"]))
	{
	if(isset($_POST['mail']) || isset($_POST['mdp']))
			{
			
			if($_POST['mail']!="" && $_POST['mdp']!="")
			{
				$mail = mysql_real_escape_string($_POST["mail"]) ;
				$mdp = mysql_real_escape_string($_POST["mdp"]) ;
			
				$sql = 'SELECT utilisateur_id, nom, prenom, age, telephone FROM kinder WHERE mail ="'.$mail.'"
				AND motdepasse="'.$mdp.'"';
				echo $sql ;
				$result = $db->prepare($sql);
				$columns = $result->execute();
				$columns = $result->fetch();

			
				if(!empty($columns))
				{					
					$_SESSION['nom'] = $columns['nom'] ;	
					$_SESSION['utilisateur'] = $columns['prenom']. ' '.$columns['nom'];
					$_SESSION['utilisateur_id'] = $columns['utilisateur_id'];		
					header('location:pages/accueil.php') ;
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
	}
	if ( !empty($_SESSION) )
	{
		echo "<h4>Bonjour ".$_SESSION['nom']. "</h4>" ;
		echo '<a href="pages/deconnexion.php" > DECONNEXION</a>' ;
	
	} else {
	echo ' ' ;
	}
	?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="styles/style2.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'/>
	</head>
	<body>
		<header>
			<h1><img src="http://www.gotinder.com/images/tinder_logo_bright_red.svg" id="logo" /></h1>
		<h2> Des rencontres pour satisfaire <br/>votre b<a href="pages/accueil.php">i</a>te en feu</h2>
		</header>
		<div id="rond1">
			<h3>CONNEXION</h3>
			<form method="post" action="">
				<input type="mail" name="mail" placeholder="mail" class="mail"/> <br/>
				<input type="password" name="mdp" placeholder="mot de passe" class="password" />
				<input type="submit" name="envoyer" id="submit"/>
			</form>
		</div>
		<div id="rond2">
			<h3>INSCRIPTION<br/>GRATUITE</h3>
			<a href="pages/inscription.php">
				<div id="inscription"> S'inscrire</div>
			</a>
		</div>
		<script type="text/javascript">    
function fblogout() {    
          FB.logout(function () {    
     window.location.reload(); });    
    }    
      window.fbAsyncInit = function() {    
        FB.init({    
          appId   : '<?php echo $facebook->getAppId(); ?>',    
          session : <?php echo json_encode($session); ?>,    
          status  : true,    
          cookie  : true,    
          xfbml   : true    
        });    

        FB.Event.subscribe('auth.login', function() {    
          window.location.reload();    
        });    
      };    

      (function() {    
        var e = document.createElement('script');    
        e.src = document.location.protocol + '//connect.facebook.net/fr_FR/all.js';    
        e.async = true;    
        document.getElementById('fb-root').appendChild(e);    
      }());    
          //your fb login function    
          function fblogin() {    
     FB.login(function(response) {    
              //...    
            }, {perms:'read_stream,publish_stream,offline_access'});    
   redir();    
          }    
        </script>

	</body>
</html>