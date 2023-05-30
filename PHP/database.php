<?php
function conn(){
$dbhost = "localhost:3310";
$dbuser = "root";
$dbpass = "";
$dbname = "ahorro";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
return $conn;
}
?>