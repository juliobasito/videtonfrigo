<?php
namespace Forum;
use PDO;
require_once('Technique/start.php');
   
// test des parametres
if (empty($_POST["txtLogin"]))
{
    $_SESSION["erreur"] = "vous devez saisir votre login";
    header("Location:login.php");
}
if (empty($_POST["txtMotDePasse"]))
{
    $_SESSION["erreur"] = "vous devez saisir votre mot de passe";
    header("Location:login.php");
}
// ici param ok.
$rep = $db->prepare("CALL login (:p_login, :p_motDePasse)");

$rep->bindParam(":p_login", $_POST["txtLogin"]);
$rep->bindParam(":p_motDePasse", $_POST["txtMotDePasse"]);

$rep->execute();
$IDMembre = $rep->fetch(PDO::FETCH_COLUMN);
if (empty($IDMembre))
{
   $_SESSION["erreur"] = "login/mot de passe incorrect";
    header("Location:login.php");  
}
else
{
    $_SESSION["mail"] = $IDMembre;
    header("Location:accueil.php");  
}
?>