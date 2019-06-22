

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




<div class="login-page" id="login">
  <div class="form">
    
    <form class="login-form" method="POST">
      <input id="username" type="text" placeholder="username" name="username"/>
      <button type="submit" onclick="displayResult()">Add to blacklist</button>
    </form>

  

  </div>
</div>


<?php

include 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['username'])) {
   
    $username =  trim($_POST['username']);
    $query =  "INSERT INTO `blacklist` (name) VALUES ('{$username}')";
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
      
    }
    else {
      echo "Utilizatorul nu exista";
    }
  }




?>