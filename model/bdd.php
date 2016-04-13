<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=vtf', 'vtf', 'vtf');
	$db->query('SET NAMES utf8');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

?>