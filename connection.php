<?php
$serverName='localhost';
$userName='root';
$password='';
$dbName='RL';
$conn= new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
// echo"connection successfull";
?>