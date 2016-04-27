<?php
session_start();
$pseudo = $_POST['pseudo'];
$password = $_POST['password'];
$result = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/connexion/'.$pseudo.'/'.$password),true);
if($result!= '0')
{
	$_SESSION['id'] = intval($result);
	header('Location: index.php'); 
}

else
{
	header('Location: connexion.php'); 
}
?>