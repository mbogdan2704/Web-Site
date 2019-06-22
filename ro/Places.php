

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Romania</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="style.css" rel="stylesheet">
  <link href="places_css.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="ro.html"><img src="img/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="ro.html"> HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">  Autentificare </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Places.php"> Vizualizeaza locuri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Top.php"> Top Utilizatori </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="Grafic.php"> Grafic Utilizatori</a>
      </li>
    </ul>
  </div>
</div>
</nav>

    <div class="page">
      <div class="page-header cf">
        <h2>Places to visit</h2>
      </div>
    </div>
      
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/transalpina.jpg" alt="First slide">
      <div class="carousel-caption">
      <h1 class="display-2"> Transalpina</h1>
      <a href="Increment1.php"><button type="button" class="btn btn-outline-light btn-lg"> 
        
      <?php
      include 'database.php';

        $query =  "SELECT * FROM `people_likes` WHERE id=1";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        echo "Likes = ";
        echo $row['likes'];


      ?>
    
    
    </button> </a>
      
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bigar.jpg" alt="Second slide">
      <div class="carousel-caption">
      <h1 class="display-2"> Cascada Bigar</h1>
      <a href="Increment2.php"><button type="button" class="btn btn-outline-light btn-lg"> 
        
      <?php

        $query =  "SELECT * FROM `people_likes` WHERE id=2";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        echo "Likes = ";
        echo $row['likes'];


      ?>
    
    
    </button> </a>


    </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/transfagarasan.jpg" alt="Second slide">
      <div class="carousel-caption">
      <h1 class="display-2">  Transfagarasan</h1>
      <a href="Increment3.php"><button type="button" class="btn btn-outline-light btn-lg"> 
      <?php

        $query =  "SELECT * FROM `people_likes` WHERE id=3";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        echo "Likes = ";
        echo $row['likes'];


      ?>



      </button> </a>

    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/balea.jpg" alt="Second slide">
      <div class="carousel-caption">
      <h1 class="display-2">  Lacul balea</h1>
      <a href="Increment4.php"><button type="button" class="btn btn-outline-light btn-lg"> 
      <?php

        $query =  "SELECT * FROM `people_likes` WHERE id=4";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        echo "Likes = ";
        echo $row['likes'];


      ?>  
      </button> </a>

    </div>
    </div>
  
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</body>
</html>
