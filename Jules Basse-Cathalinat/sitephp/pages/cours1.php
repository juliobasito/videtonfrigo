<! DOCTYPE HTML>
<html>
<head>
	<title>Titre</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" href="styles/style.css" />
</head>
<body>
	<header>
		<img src="images/crane.jpg" class="top" align="left" /><h1 class="top">Titre</h1>
	</header>
	<ul>
		<li>Des </li>
		<li>Voyous</li>
		<li>En </li>
		<li>Feat</li>
		<li>Avec</li>
		<li>Des </li>
	</ul>
	
	<?php 
	/*function utilisateur($pseudo, $nom="", $admin=0) {
		$utilisateur = $pseudo;
		if($nom !=""){
			$utilisateur.="-".$nom;
		}
		$utilisateur.="<br/>";
		switch($admin){
			case 0 :
				$type = "utilisateur" ;
				break;
			case 1 :
				$type = "modérateur";
				break;
			case 2 :
				$type = "administrateur";
				break;
		}
		$utilisateur.="<em>".$type."</em>";
		$utilisateur.="<br/>";
		return $utilisateur;
	}			
	
	echo utilisateur("abrutim", "graveline", 2);
	echo utilisateur("Batman", "", 1);
	echo utilisateur("Jules");
	*/

	$panier = array("Légumes" => array ("Choux", 
										"Epinards", 
										"Carotte"),
					"Fruits" => array ("Agrumes" => array ("Orange",
															"Clémentine",
															"Citron"),
										"Fruits Rouges" => array ("Groseilles",
																	"Cassis",
																	"Mûres"),
										"Autres" => array ("Pommes",
															"Poires")));
															
	/*var_dump($panier);
	echo"<pre>";
		print_r($panier);
	echo "</pre>";
	*/
	
	function liste($tableau) {
		foreach ($tableau as $cle => $valeur) {
			if(is_array($valeur)==true) {
				echo $cle."<ul>";
				liste($valeur);
				echo "</ul>";
			} else {
				echo "<li>".$valeur."</li>";
			}
		}
			
	}
	
	liste($panier);
	/*$nom = "Basse" ;
			$prenom = "Jules" ;
			$age = "18" ;
			$ville = "Bordeaux" ;
			$age = 21 ;
			$note = 15 ;
			$x = 0 ;
			$limit = 100 ;
			$but = 666 ;
			$compteur1 = 0 ;
			$compteur2 = 0 ;
			$x = 0 ;
			
			for($x = 0 ; $x != $but ;$compteur1 ++) {
				$x = rand(0,1000) ;
			}
			
			echo $compteur1. "<br/>" ;
			
			while($x!=$but) {
				$x = rand(0,1000) ;
				$compteur2 ++ ;
			}
			echo $compteur2 ;
			
			if($age < 18) {
				echo "trop jeune" ;
				$aut = false ;
			} elseif($age == 18){
				echo "free beer" ;
				$aut = true ;
			} elseif ($age > 18) {
				echo "pilier de comptoir" ;
				$aut = true ;
			}
			
			if($aut == true) {
				echo "accés OK" ;
			} else {
				echo "accés refusé" ;
			}
			
			if ($note>=0 && $note<5) {
				echo "nul" ;
			} elseif($note>=5 && $note<10) {
				echo "naze" ;
			} elseif($note>=10 && $note<15) {
				echo "passable" ;
			} elseif($note>=15 && $note<20) {
				echo "pas mal" ;
			} else {
				echo "top !" ;
			}
			
			switch($x){
				case 1 :
					echo "auguste est nul" ;
					break ;
			default : 
				echo "je suis nul" ;
				break ;
			}
			
			
			
			echo "Je m'appelle <strong>    " .$prenom   .$nom. "</strong>" ;
			echo "j'ai  <strong>" .$age .'</strong>';
			echo "ans et j'habite  <strong>" .$ville. '</strong>' ;
			*/
			
		?>
			
	
</body>
</html>