<?php
        include('connexion_bdd.php');

			if(!empty($_POST['connexion']))
			{
        if(isset($_POST["pseudo"]) && isset($_POST["mail"]) && isset($_POST["mdp"]))
                {

                        if(!empty($_POST["pseudo"]) && !empty($_POST["mail"]) && !empty($_POST["mdp"]))
                        {

                                $pseudo=$_POST["pseudo"];
                                $mail=$_POST["mail"];
                                $motdepasse=$_POST["mdp"];
								$poste = $_POST["poste"];
                                //$_SESSION['id'] = $columns['id'];

                                
                                $req=$db->prepare("INSERT INTO utilisateurs(pseudo, mail, motdepasse, poste) VALUES (:pseudo, :mail, :motdepasse, :poste)");
                                $req->execute(array(
                                        'pseudo' => $pseudo,
                                        'mail' => $mail,
                                        'motdepasse' => $motdepasse,
                                        'poste' => $poste));
								//$req->execute() ;
                                echo $_POST['poste'] ;
                              }
                        else
                        {
                                echo "Remplissez tous les champs s'il vous plait" ;
                        }
                        if($_POST['poste'] == 'administrateur')
                                {
								 echo "Vous etes inscrit !" ;
                                 echo "<br/>" ;
                                 echo "<a href='accueil_connecte_admin.php'> Acces a votre compte </a>" ;

                                 echo $pseudo;
                                }
                                else
                                {
                                echo "vous etes inscrit !" ;
                                echo "<br/>" ;
                                echo "<a href='accueil_connecte.php'>Acces a votre compte </a>" ;
                                echo $pseudo ;

                }
                }
}
?>

<! DOCTYPE HTML>
<html>
  <head>
                <meta charset="utf-8" />
                <link rel="stylesheet" media="screen" type="text/css" href="../styles/style.css" />
                <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'/>
        </head>
        <body>
                <header>
                        <a href="../index.php"><h1>OLBISOU A TA MAMAN</h1></a>
                        <h2> INSCRIPTION </h2>
                </header>
                <div id="wrapper">
                        <div id="encart_inscription">
                                <form method="post" action="">
                                        <input type="text" name="pseudo" placeholder="pseudo" id="inscription_pseudo"/> <br/>
                                        <input type="mail" name="mail" placeholder="mail" id="inscription_mail"/> <br/>
                                        <input type="password" name="mdp" placeholder="mot de passe" id="inscription_password" /> <br/>
                                        <input type="radio" name="poste" value="administrateur" /><label for="administrateur">Administrateur</label><br/>
                                        <input type="radio" name="poste" value="adherent"/><label for="adherent">Adherent</label>
                                        <input type="submit" name="connexion" id="inscription_submit"/>
  </form>
                        </div>
                </div>
                <footer>

                </footer>
        </body>
</html>



