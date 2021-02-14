<?php
$servername = "localhost";
$username = "admin";
$password = "admin123";
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$db = "CREATE DATABASE IF NOT EXISTS videoteka21;";
if($conn->query($db) === TRUE){
    echo "Database created successfully";
} 
else {
    echo "Error creating database: " . $conn->error;
}
?>