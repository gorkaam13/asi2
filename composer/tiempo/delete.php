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
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//
$id = $_GET['Id'];
$sql = "DELETE FROM capitales WHERE capital=$capital";
$result = $conn->query($sql);
header("Location: editor.php");