<?php
session_start();
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=td_musique', 'root', '');
		$db->query('SET NAMES utf8');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}

?>