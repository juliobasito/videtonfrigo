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
?>

<!--TINDER-->
<div class="polaroid">
</div>
<form method="POST" action="script-seetings.php" class="width-80 center">
  <div class="form-group">
    <label>Complexite max: </label><br/>
    <input type="radio" name="complexite" value="1"> 1 <br/>
    <input type="radio" name="complexite" value="2"> 2 <br/>
    <input type="radio" name="complexite" value="3"> 3 <br/> 
    <input type="radio" name="complexite" value="4"> 4 <br/>
    <input type="radio" name="complexite" value="5"> 5 <br/><br/>

    <label>Temps max: </label><br/>
    <input type="radio" name="temps" value="10"> 10 min <br/>
    <input type="radio" name="temps" value="20"> 20 min <br/>
    <input type="radio" name="temps" value="30"> 30 min <br/>
    <input type="radio" name="temps" value="45"> 45 min <br/>
    <input type="radio" name="temps" value="60"> 60 min <br/><br/>

    <label>Note min: </label><br/>
    <input type="radio" name="note" value="1"> 1 <br/>
    <input type="radio" name="note" value="2"> 2 <br/>
    <input type="radio" name="note" value="3"> 3 <br/>
    <input type="radio" name="note" value="4"> 4 <br/>
    <input type="radio" name="note" value="5"> 5 <br/><br/>

    <label>Nombre de personnes: </label><br/>
    <input type="radio" name="nbPersonne" value="1"> 1 <br/>
    <input type="radio" name="nbPersonne" value="2"> 2 <br/>
    <input type="radio" name="nbPersonne" value="3"> 3 <br/>
    <input type="radio" name="nbPersonne" value="4"> 4 <br/>
    <input type="radio" name="nbPersonne" value="5"> 5 <br/>
	<input type="radio" name="nbPersonne" value="6"> 6 <br/>
    <input type="radio" name="nbPersonne" value="7"> 7 <br/>
    <input type="radio" name="nbPersonne" value="8"> 8 <br/>
    <input type="radio" name="nbPersonne" value="9"> 9 <br/>
    <input type="radio" name="nbPersonne" value="10"> 10 <br/><br/>

    <input type="text" name="userId" value="<?php echo $_SESSION['id'];?>" hidden>

    <input type="submit" value="Valider" class="btn btn-primary">
  </div>
</form>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>