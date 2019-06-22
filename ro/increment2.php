

<?php
session_start();
include 'database.php';

$name = $_SESSION['user_name'];

$query =  "SELECT * FROM `blacklist` where name = '{$name}'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$row =  $result->fetch_assoc();
$name = $row['name'];
if($name)
{
    header("Location: Places.php");
}
else {
    $var = $_SESSION['user_id'] -1;
    $query =  "UPDATE `likes` SET likes = likes  + 1 where id = '{$var}'";
    $mysqli->query($query) or die($mysqli->error.__LINE__);
    $query =  "UPDATE `people_likes` SET likes = likes  + 1 where id = 2";
    $mysqli->query($query) or die($mysqli->error.__LINE__);
    header("Location: Places.php");

}

?>