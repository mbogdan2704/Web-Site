

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

  <link href="top_css.css" rel="stylesheet">

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
        <h2>Top Users</h2>

      </div>
      <ul class="users">
        <li class="student-item cf">
            <div class="student-details">
                <img class="avatar" src="">
                <h3>
                  <?php



                  include 'database.php';
                  $query =  "SELECT * FROM `likes` order by likes DESC";
                  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $val = 0;
                  while ($row = $result->fetch_assoc()) {
                      if ($val ==0) {
                           $id1 = $row['id'] +1;
                          $likes1 = $row['likes'];
                      }
                      if($val == 1) {
                          $id2 = $row['id'] + 1;
                          $likes2 = $row['likes'];


                      }
                      if($val == 2) {
                          $id3 = $row['id'] + 1;
                          $likes3 = $row['likes'];

                      }
                      $val = $val +1;
                      if ($val ==3 )
                        break;
                  }
                  
                  $query =  "SELECT * FROM `user` where id = '{$id1}'";
                  $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                  $row =  $result->fetch_assoc();

                  echo $row['username'];
                  ?>
                  
                </h3> 
                <span class="email"><?php echo $row['email'] ?></span>
         
            </div>
            <div class="joined-details">
                   <span class="date">Likes <?php echo $likes1 ?></span>
           </div>
        </li>
        <li class="student-item cf">
            <div class="student-details">
                <img class="avatar" src="">
                <h3><?php
                      $query =  "SELECT * FROM `user` where id = '{$id2}'";
                      $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                      $row =  $result->fetch_assoc();
                    echo $row['username'];
                   
                
                ?>
                </h3>
                <span class="email"><?php echo $row['email'] ?></span>
            </div>
            <div class="joined-details">
                   <span class="date">Likes <?php echo $likes2 ?></span>
           </div>
        </li>
        <li class="student-item cf">
            <div class="student-details">
                <img class="avatar" src="">
                <h3>
                <?php
                      $query =  "SELECT * FROM `user` where id = '{$id3}'";
                      $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                      $row =  $result->fetch_assoc();
                      echo $row['username'];
                   
                
                ?>



                </h3>
                <span class="email"><?php echo $row['email'] ?></span>
            </div>
            <div class="joined-details">
                   <span class="date">Likes <?php echo $likes3 ?></span>
           </div>
        </li>
        
      </ul>

    </div>
   
</body>
</html>