<?php 
session_start();
mysql_query("SET NAMES UTF-8");

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=olibrary', 'root', '');
		$db->query('SET NAMES utf8');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
?>