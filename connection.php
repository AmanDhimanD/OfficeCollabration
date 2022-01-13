<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "25sep";


$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo "Connection Falied!";
}
?>