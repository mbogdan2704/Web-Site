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
  <link href="style3.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
 

</head>

<body>


<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
  <a class="navbar-brand" href="index.html"><img src="img/logo.jpg"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>

  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html"> HOME </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">  Autentificare </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Places.html"> Vizualizeaza locuri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Top.html"> Top Utilizatori</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="Grafic.html"> Grafic Utilizatori</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<div class="login-page" id="login">
  <div class="form">
    <form class="register-form"  method="POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <input type="text" placeholder="email" name="email"/>
      <button type="submit" onclick="displayResult()">Create</button>
    </form>

  </div>
</div>
<?php
include 'database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['username'], $_POST['password'], $_POST['email'])) {
        $username =  trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['password']);
        $query =  "SELECT * FROM `user` WHERE username='{$username}'";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        $user = $row['username'];

        if($user == $username) {
            echo "Userul deja exista";
        }
        else {
            $query =  "INSERT INTO `user` (username, password, email) VALUES ('{$username}', '{$password}', '{$email}')";
            $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            $query = "INSERT INTO `likes` (likes) VALUES (0)";
            $mysqli->query($query) or die($mysqli->error.__LINE__);

            header("Location: login.php");
        }

    }
    else{
        echo "Va rog sa completati toate campurile";
    }
}

?>


</body>

</html>