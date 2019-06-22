
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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link href="style.css" rel="stylesheet">
  <link href="graph_css.css" rel="stylesheet">

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
<?php
        include 'database.php';
      
        $query = "SELECT * FROM `counter`";
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $row =  $result->fetch_assoc();
        $mon = $row['Mon'];
        $tue = $row['Tue'];
        $wed = $row['Wed'];
        $thu = $row['Thu'];
        $fri = $row['Fri'];
        $sat = $row['Sat'];
        $sun = $row['Sun'];
        $sum = $mon + $tue + $wed + $thu + $fri + $sat + $sun;

?>
<div class ="wrapper">


  <h1> Grafic</h1>
  <br>
  <h2> Luni</h2>
  <div class="line line1" id ="line1"> <?php echo   number_format((float)$sum/$mon, 2, '.', '') . "%"; ?> </div>


  <h2> Marti</h2>
  <div class="line line2" id = "line2"> <?php echo   number_format((float)$sum/$tue, 2, '.', '') . "%"; ?> </div>



  <h2> Miercuri</h2>
  <div class="line line3" id = "line3"> <?php echo   number_format((float)$sum/$wed, 2, '.', '') . "%"; ?> </div>
  <h2> Joi</h2>
  <div class="line line4" id = "line4"> <?php echo   number_format((float)$sum/$thu, 2, '.', '') . "%"; ?></div>
  <h2> Vineri</h2>
  <div class="line line5" id = "line5"> <?php echo   number_format((float)$sum/$fri, 2, '.', '') . "%"; ?> </div>
  <h2> Sambata</h2>
  <div class="line line6" id = "line6"> <?php echo   number_format((float)$sum/$sat, 2, '.', '') . "%"; ?> </div>
  <h2> Duminica</h2>
  <div class="line line7" id = "line7"> <?php echo   number_format((float)$sum/$sun, 2, '.', '') . "%"; ?> </div>
</div>
<script>

  $(document).ready(function(){
  var mon = "<?php echo $sum/$mon?>";
  var tue = "<?php echo $sum/$tue?>";
  var wed = "<?php echo $sum/$wed * 100?>";
  var thu = "<?php echo $sum/$thu?>";
  var fri = "<?php echo $sum/$fri?>";
  var sat = "<?php echo $sum/$sat?>";
  var sun = "<?php echo $sum/$sun?>";

  $( "#line1" ).width(mon + "%");
  $( "#line2" ).width(tue + "%");
  $( "#line3" ).width(wed + "%");
  $( "#line4" ).width(thu + "%");
  $( "#line5" ).width(fri + "%");

  $( "#line6" ).width(sat + "%");

  $( "#line7" ).width(sun + "%");

  //document.getElementById("line5").style.maxWidth = fri;
});


</script>
  
</body>
</html>