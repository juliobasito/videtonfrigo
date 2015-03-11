<html>
	<head>
		<title>En Direct du Stade</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="../css/moncss.css" />
		<meta charset="utf-8"/>
		<meta http-equiv="refresh" content="5000"/>
		<link href="../css/lightbox.css" rel="stylesheet" />
	</head>
	
	<body class="loading">
	<?php include("connexion_bdd.php");?>
		<div id="corp">
			<header>
				<h1 id="titre-resul">
					Resultats Ligue 1
				</h1>
				
				<?php 
					$sql = $db->prepare("SELECT dom, ext, butdom, butext FROM resultat");
					$sql->execute();
					
					while ($resultat2 = $sql->fetch())
					{
						echo "<div id='affich-resul'>".$resultat2['dom'].' '.$resultat2['butdom'].' - '.$resultat2['butext'].' '.$resultat2['ext']. "</div>" ;
					}
				?>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/FUF9SGw-QtE?list=PLIN0y6TbDGWzATlyuGjZWPOX8OcpObZAH" frameborder="0" allowfullscreen data-lightbox="image-1" data-title="My caption"></iframe>
			</header>			
		</div>
		<script src="../js/jquery-1.11.0.min.js"></script>
		<script src="../js/lightbox.min.js"></script>
	</body>
</html>
		