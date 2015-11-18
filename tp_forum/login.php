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
            <form id="frmLogin" method="POST" action="_login.php">
                <label for="txtLogin">Login</label>
                <input type="text" id="txtLogin" name="txtLogin">
                <label for="txtMotDePasse">Mot de passe</label>
                <input type="password" id="txtMotDePasse" name="txtMotDePasse"> 
                <input type="submit"  value="Se connecter"> 
            </form>
			<a href="inscription.php">Voulez-vous vous inscrire ?</a>
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
