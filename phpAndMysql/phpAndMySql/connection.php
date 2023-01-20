<?php

$server = "localhost";
$username = "root";
$password = "root";
$db = "some_data1";

//create a connection
$conn = mysqli_connect($server, $username, $password, $db);

//check the connection
if(!$conn){
    die("Connection failed: " .mysqli_connect());
}
// echo("Connected succesfully")
?>