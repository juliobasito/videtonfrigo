<?php
namespace Forum;
use PDO;
require_once('Technique/start.php');

if (empty($_POST["txtNom"]))
{
    $_SESSION["erreur"] = "vous devez saisir votre nom";
    header("Location:inscription.php");
}
if (empty($_POST["txtPrenom"]))
{
    $_SESSION["erreur"] = "vous devez saisir votre prenom";
    header("Location:inscription.php");
}
if (empty($_POST["txtMail"]))
{
    $_SESSION["erreur"] = "vous devez saisir votre mail";
    header("Location:inscription.php");
}
if (empty($_POST["txtMotDePasse"]))
{
    $_SESSION["erreur"] = "vous devez saisir un mot de passe";
    header("Location:inscription.php");
}

$repinscri = $db->prepare("CALL creerMembre (:p_nom, :p_prenom, :p_adresse, :p_complement, :p_codepostal, :p_ville, :p_tel, :p_mail, :p_csp, :p_motdepasse)");

$repinscri->bindParam(":p_nom", $_POST["txtNom"]);
$repinscri->bindParam(":p_prenom", $_POST["txtPrenom"]);
$repinscri->bindParam(":p_adresse", $_POST["txtAdresse"]);
$repinscri->bindParam(":p_complement", $_POST["txtComplement"]);
$repinscri->bindParam(":p_codepostal", $_POST["txtCP"]);
$repinscri->bindParam(":p_ville", $_POST["txtVille"]);
$repinscri->bindParam(":p_tel", $_POST["txtTel"]);
$repinscri->bindParam(":p_mail", $_POST["txtMail"]);
$repinscri->bindParam(":p_csp", $_POST["txtCsp"]);
$repinscri->bindParam(":p_motdepasse", $_POST["txtMotDePasse"]);

$repinscri->execute();
echo "apres l'insertion" ;
$reqsup = "SELECT ID, nom, prenom, adresse, complement, codepostal, ville, telephone, mail, csp, motdepasse FROM utilisateur WHERE mail = '".$_POST["txtMail"]."'" ;
echo $reqsup ;
$reqsup2 = $db->prepare($reqsup);
$reqsup2->execute();
$IDMembre = $reqsup2->fetch(PDO::FETCH_COLUMN);
if (empty($IDMembre))
{
   $_SESSION["erreur"] = "Erreur d'inscription";
    //header("Location:inscription.php");  
}
else
{
    $_SESSION["IDMembre"] = $IDMembre;
    header("Location:accueil.php");  
}

?>