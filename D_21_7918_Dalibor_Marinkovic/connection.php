<?php
$servername="localhost";
$username= "admin";
$password="admin123";
$db="videoteka21";
$conn= new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("Error connecting to database: ". $conn->connect_error);
}
?>