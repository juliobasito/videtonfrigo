<?php
session_start();
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=labo', 'root', '');
		$db->query('SET NAMES utf8');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

?>