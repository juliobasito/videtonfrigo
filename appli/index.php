<?php session_start() ?>
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
<body>

  <?php
  include('menu.php');
  $seeting = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getSeeting/'.$_SESSION['id']),true);
  $content = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getRecetteByAll/'.$seeting[0][1].'/'.$seeting[0][0].'/'.$seeting[0][2].'/'.$_SESSION['id'].'/'.$seeting[0][4]),true);

  if(isset($_GET['i']))
  {
    $i = $_GET['i'];
    if($i<sizeof($content))
    {
      $i++;
    }
  }
  else 
  {
    $i = 1;
  }
  $recetteNow = json_decode(file_get_contents('http://localhost:8888/videtonfrigo/getRecetteByID/'.$content[$i-1][0][0]), true);
    ?>
  <!--TINDER-->
  <?php if(sizeof($content)>0)
  { ?>
  <div class="polaroid">
    <img class="img" src="img/recettes/<?php echo $recetteNow[7];?>">
    <h3 class="polaroidTitre"><?php echo $recetteNow[1]; ?></h3>
  </div>
  <div class="stars">
    <?php
      $j=0;
      while($j<$recetteNow[3])
      {
        echo'<img class="star left" src="img/etoile.png">';
        $j++;
      }?>
  </div>
  <div class="likebuttons">
    <button class="likebutton left"><img src="img/like.png"></button>
    <a href="index.php?i=<?php echo $i;?>"><button class="likebutton right"><img src="img/dislike.png"></button></a>
  </div>
  <?php } 
  else
  {
  ?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Aucune recettes trouvé
</div>
  <?php } ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>