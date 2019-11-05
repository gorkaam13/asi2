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
//echo "Connected successfully";
// formulariotik bidalitako datuak irakurri
// leer desde el formulario
$user =  $_GET['user'];
$password = $_GET['password'];
//
$sql = "SELECT * FROM users WHERE user = '$user';";
//echo $sql . "<br><br>";
//
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($user == $row["user"]){
        if (password_verify($password, $row["pass"])) {
            echo "ok";
        } else{
            echo "KO";
        }
    } else {
        echo "KO";
    }
} else {
    echo "KO";
}
$conn->close();
