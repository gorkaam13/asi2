<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$tit = $_GET['tit'];
$news = $_GET['news'];
$imag= $_GET['imag'];


$sql = "INSERT INTO blog ( tit,news, imag)
VALUES ('$tit','$news', '$imag')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();