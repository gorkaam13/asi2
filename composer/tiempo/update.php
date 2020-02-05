<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}


$servername = "localhost";
$username = "proyecto";
$password = "";
$dbname = "proyecto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$capital = $_GET['capital'];
$latitud = $_GET['latitud'];
$longitud = $_GET['longitud'];


$sql = "UPDATE capitales 
SET latitud='$latitud', longitud='$longitud' 
WHERE capital = '$capital'";
//echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}


$conn->close();
header("Location: editor.php");