<html>
	<head>
		<title>En Direct du Stade</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../styles/moncss.css"/>
	</head>
	
	<body class="loading">
	<?php 
	include("connexion_bdd.php");
	require_once '/autoload.inc.php';
	//session_start();
	?>
		<div id="corp">
			<header>
			
				<h1 id="titre-resul">
					Resultats Ligue 1
				</h1>
				
				<?php 
					$sql = $db->prepare("SELECT dom, ext, butdom, butext, cotedom, cotenul, coteext FROM resultat");
					$sql->execute();
					while ($resultat2 = $sql->fetch())
					{
						echo "<div id='affich-resul'>".$resultat2['dom'].' '.$resultat2['butdom'].' - '.$resultat2['butext'].' '.$resultat2['ext']. "</div>" ;
						?>
						<form method="POST" action="">
							<input type="number" name="sommepari" value="0"></br>Point Misés (uniquement entre 1 et 50)</br>
							<input type="radio" name="cote" value="cotevic"> <?php echo $resultat2["cotedom"];?><br>
							<input type="radio" name="cote" value="cotenul" checked> <?php echo $resultat2["cotenul"];?><br>
							<input type="radio" name="cote" value="cotedef"> <?php echo $resultat2["coteext"];?><br>
							<input type="submit" name="envoyer" value="PARIER !">
						</form>
							<?php
							}
				?>
			</header>			
		</div>
	</body>
</html>

<?php 
if(!empty($_POST["envoyer"]))
{
	$user = $_SESSION["user"];
	$cote = $_POST['cote'];
	$somme = $_POST['sommepari'];
	if ($somme > 0)
	{
		if ($somme <51)
		{
			if($user->getPoint())
			{
				echo "good getpoint";
				$user->parier($somme);
				//var_dump($_SESSION["user"]);
			}
			else
			{
				echo "Vous n'avez pas assez de points pour parier autant, attendez la semaine prochaine.";
			}
		}
		echo "Vous ne pouvez pas parier plus de 50 points";
	}
	echo "Vous devez entrer un nombre";
}
?>
		