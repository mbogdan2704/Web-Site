

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
  <link href="style2.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
 

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
        <a class="nav-link" href="login.php">  Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Places.php"> See places</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Top.php"> Top Users </a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="Grafic.php"> Users Graph</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<div class="login-page" id="login">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="POST">
      <input id="username" type="text" placeholder="username" name="username"/>
      <input id="password" type="password" placeholder="password" name='password'/>
      <button type="submit" onclick="displayResult()">login</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>

  

  </div>
</div>
<?php
if(isset($_SESSION['user_id'])) {

  header("Location: already_logged.php");
}
?>

<?php

include 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['username'], $_POST['password'])) {
   
   
    $username =  trim($_POST['username']);
    $password = trim($_POST['password']);
    $query =  "SELECT * FROM `user` WHERE username='{$username}'";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $row =  $result->fetch_assoc();
    $user = $row['username'];
    $pass = $row['password'];
   
    if($user == $username) {
      if($pass == $password) {
        echo "Succes";
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $user;
        $date = date("d-m-y");
        $nameOfDay = date('D', strtotime($date));
        $query =  "UPDATE `counter` SET {$nameOfDay} = {$nameOfDay}  + 1";
        $mysqli->query($query) or die($mysqli->error.__LINE__);
        header("Location: already_logged.php");


    
     }
      else {
        echo "Parola introdusa este gresita";
      }
    }
    else {
      echo "Utilizatorul nu exista";
    }
  }
}

?>


</body>
</html>