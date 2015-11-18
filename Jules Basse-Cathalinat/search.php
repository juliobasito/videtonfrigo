<?php include('head.php');  ?>
<?php

$title= '%'.$_POST["search"].'%';
$sql = 'SELECT titre, resume, image, nom ,prenom FROM film JOIN realisateur ON film.id_realisateur = realisateur.id WHERE titre LIKE "'.$title.'" ORDER BY titre; ';
$bdd = mysql_connect("127.0.0.1", "root", "");
mysql_query("SET NAMES UTF8") ;
mysql_select_db("labo", $bdd);
$titre = mysql_query($sql) ;
if(!empty($titre)){
	while($row = mysql_fetch_assoc($titre)){
	?>
		<div>
	<?php	
		echo "<div><span>Titre du film : </span>".$row['titre']."</div>" ;
		echo "<div><span>realisateur : </span>".$row['prenom'].' '.$row['nom']."</div>" ;
	?>
		<img src ="<?php echo $row['image'] ?>" alt ="image" width="225" height="300" id="imagephp"/>
		
	<?php
		echo "<div><span>Synopsis : </span>".$row['resume']."</div>" ;
	?>
	</div><br/><br/><br/>
	<?php
	}
}
else{
	echo "pas de résultat" ;
}

 ?>
 </body>
 </html>