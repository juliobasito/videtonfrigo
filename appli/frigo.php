<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mycss.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="white">

	<?php
	include('menu.php');
	$categories = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getAllCategory'), true);
	$ingredient = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getIngredientsFridge/'.$_SESSION['id']), true);
	$allIngr = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getAllIngredient'),true);
	$i=0;
	$tab = [];
	while($i<sizeof($categories))
	{
		?>
		<div class="width-80 center">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo $categories[$i][1];?></div>
				<div class="panel-body">
					<table class="table">
						<?php 
						$catid = $categories[$i][0];
						$j = 0;
						while($j < sizeof($ingredient))
						{
							if($catid == $ingredient[$j][7])
								{ ?>
							<tr>
								<td>
									<?php echo $ingredient[$j][4]; ?>
								</td>
								<td>
									<button type="button" class="btn btn-danger" aria-label="Left Align">
										<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
									</button>
								</td>
							</tr>
							<?php }
							$j++;
						}
						?>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php
$i++;
}
?>
<button type="button" class="btn btn-info addIngr" aria-label="Left Align" id="buttonAdd" onclick="displayForm()">
	<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button>
<div class="popup" id="formAdd">
	<button type="button" class="btn btn-info addIngr" aria-label="Left Align" id="buttonAdd" onclick="displayButton()">
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	</button>
	<form>
		<div class="form-group">
			<select>
				<?php 
				$i = 0;
				while($i<sizeof($allIngr))
				{
					?>
					<option><?php echo $allIngr[$i][1]?></option>
					<?php
					$i++;
				} ?>
			</select>
		</div>
		<input type="text" value="<?php echo $_SESSION['id'];?>" name="userid">
		<input type="submit" value="Ajouter" class="btn btn-default">
	</form>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js">
</script>
<script>
function displayButton()
{
	document.getElementById('buttonAdd').style.display = "block";
	document.getElementById('formAdd').style.display = "none";
}
function displayForm()
{
	document.getElementById('buttonAdd').style.display = "none";
	document.getElementById('formAdd').style.display = "block";
}
</script>
</body>
</html>