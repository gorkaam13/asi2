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
}?>

<html>

<body>
 <h1>crear ubicacion</h1>
    <form action="insert.php" method="GET">
     capital:<br>
    <input type="text" name="capital" value=""><br>
    latitud:<br>
    <input type="text" name="latitud" value=""><br>
    longitud:<br>
    <input type="text" name="longitud" value="">
    <br><br>
    <input type="submit" value="crear">
    </form>
    
    
    <hr>
</body>
</html>
<?php
$sql2 = "SELECT * FROM capitales";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       /* echo "capital: " . $row["capital"]. 
        "<br> latitud: " . $row["latitud"]. 
        "<br> longitud:" . $row["longitud"];*/
        ?>
        <html>
           <body>
           <h3>modificar ubicacion</h3>
<form action="delete.php" method="GET">
        capital:<br>
       <input type="text" name="capital" value="<?php echo $row["capital"] ?>"><br>
       <input type="submit" value="borrar">
       </form>
      
       <h3>borrar cordenadas</h3>
       <form action="update.php" method="GET">
    
    latitud:<br>
    <input type="text" name="latitud" value="<?php echo $row["latitud"] ?>"><br>
    longitud:<br>
    <input type="text" name="longitud" value="<?php echo $row["longitud"] ?>"><br><br>
    
    
    <input type="submit" value="modificar">
    </form>

 <hr>








    </body>
</html>
<?php
    }
} else {
    echo "0 results";
}