<?php

try{$bdd = new PDO("mysql:host=localhost;dbname=labo", "root", "") ;
	$bdd -> query("SET NAMES UTF8") ;
} catch (Exception $e) {
	echo "Probléme de connexion" ;
	die() ;
}
  
  
  ?>