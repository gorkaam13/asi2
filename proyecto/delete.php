<?php
$servername = "localhost";
$username = "root";
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
$sql = "DELETE FROM blog WHERE id=$id";
$result = $conn->query($sql);
