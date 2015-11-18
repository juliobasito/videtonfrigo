<?php
function __autoload ($nomClasse)
{
	require_once "/classes/" . $nomClasse . ".classes.php";
}
?>
