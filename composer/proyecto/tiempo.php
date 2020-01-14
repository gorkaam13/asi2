<?php
require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;



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

$capital =  $_GET['capital'];
$sql = "SELECT latitud,longitud FROM capitales WHERE capital = '$capital'";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    //echo "nombre: " . $row["latitud"] ;
    $latitud= $row["latitud"];
    $longitud=$row["longitud"];

} else {
    echo "0 results";
}






$forecast = (new DarkSkyApi('48bd63abc2c41657a0d72af7845d5889'))
    ->location($latitud, $longitud)
    ->units('si')
    ->language('es')
    ->forecast();

    echo $forecast->currently()->summary();


