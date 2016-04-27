<?php
session_start();
if(!isset($_POST['complexite']))
{
	$complexite = 5;
}
else
{
	$complexite = $_POST['complexite'];
}
if(!isset($_POST['temps']))
{
	$temps = 60;
}
else
{
	$temps = $_POST['temps'];
}
if(!isset($_POST['note']))
{
	$note = 1;
}
else
{
	$note = $_POST['note'];
}
if(!isset($_POST['nbPersonne']))
{
	$nbPersonne = 6;
}
else
{
	$nbPersonne = $_POST['nbPersonne'];
}
$data = array('complexite' => $complexite, 'temps' => $temps, 'note' => $note, 'nbPersonne' => $nbPersonne, 'userId' => $_SESSION['id']);
$url = 'http://localhost:8888/videtonfrigo/updateSeeting';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
header('Location: index.php');
?> 