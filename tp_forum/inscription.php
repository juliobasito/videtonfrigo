<?php
namespace Forum;
require_once 'Technique/start.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" media="screen" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <div id="divLogin">
             <h1>Yo World</h1>
            <form id="frmLogin" method="POST" action="_inscription.php">
                <label for="txtNom">Nom</label>
                <input type="text" id="txtNom" name="txtNom">
				<label for="txtPrenom">Prenom</label>
                <input type="text" id="txtPrenom" name="txtPrenom">
				<label for="txtAdresse">Adresse</label>
                <input type="text" id="txtAdresse" name="txtAdresse">
				<label for="txtComplement">Complement d'adresse</label>
                <input type="text" id="txtComplement" name="txtComplement">
				<label for="txtCP">Code Postal</label>
                <input type="number" id="txtCP" name="txtCP">
				<label for="txtVille">Ville</label>
                <input type="text" id="txtVille" name="txtVille">
				<label for="txtTelephone">Telephone</label>
                <input type="number" id="txtTelephone" name="txtTelephone">
				<label for="txtMail">Mail</label>
                <input type="mail" id="txtMail" name="txtMail">
				<label for="txtCsp">Code du CSP</label>
                <input type="number" id="txtCsp" name="txtCsp">
                <label for="txtMotDePasse">Mot de passe</label>
                <input type="password" id="txtMotDePasse" name="txtMotDePasse"> 
                <input type="submit"  value="S'inscrire"> 
            </form>
             <span class="msgErreur"><?php 
                if (!empty($_SESSION["erreur"]))
                {
                    echo $_SESSION["erreur"];
                    $_SESSION["erreur"] =  "";
                }
                
                ?></span>
        </div>        
    </body>
</html>
