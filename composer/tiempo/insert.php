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

$capital = $_GET['longitud'];
$latitud = $_GET['latitud'];
$longitud= $_GET['longitud'];


$sql = "INSERT INTO capitales ( capital,latitud, longitud)
VALUES ('$capital','$latitud', '$longitud')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: editor.php");