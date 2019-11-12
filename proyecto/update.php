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
$Id = $_GET['Id'];
$tit = $_GET['tit'];
$news = $_GET['news'];
$imag= $_GET['img'];

$sql = "UPDATE blog 
SET tit='$tit', news='$news', img='$imag' 
WHERE id='$Id'";
echo $sql;




$conn->close();