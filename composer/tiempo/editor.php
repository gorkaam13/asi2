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
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  color:white;
}
.active {
color:black;
background-color: white;
}
    </style>
<body>
<ul>
        <li><a  href="capital.html">Home</a></li>
        <li><a  href="login.html">login</a></li>
        <li><a href="admin_users.php">Administrar usuarios</a></li>
        <li><a class="active" href="editor.php">Editor</a></li>
        <li style="float:right"><a href="unset.php">Log out</a></li>
      </ul>
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
           <h3>borrar ubicacion</h3>
      <form action="delete.php" method="GET">
        capital:<br>
        <input type="text" name="capital" value="<?php echo $row["capital"] ?>"><br>
        <input type="submit" value="borrar">
        </form>
      
       <h3>modificar cordenadas</h3>
      <form action="update.php" method="GET">
      capital:<br>
      <input type="text" name="capital" value="<?php echo $row["capital"] ?>"><br>
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
