<?php
    session_start();
    
    require_once('Technique\Connexion.class.php');
    use Forum\Technique\Connexion as Connexion;
    
    $db = Connexion::Connecter();
?>

