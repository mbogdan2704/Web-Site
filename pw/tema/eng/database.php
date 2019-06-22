<?php

$db_host = 'localhost';
$db_name = 'users';
$db_user = 'root';
$db_pass = 'bogdan';
$mysqli =  new mysqli($db_host, $db_user, "", $db_name);
if($mysqli->connect_error){
    printf("Connection failed");
    exit();
}

?>