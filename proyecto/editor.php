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
}?>

<html>

<body>
<button onclick="location.href='read.php'">leer</button></div>
    <hr>   
    <form action="insert.php" method="GET">
     titulo:<br>
    <input type="text" name="tit" value=""><br>
    noticia:<br>
    <textarea rows="4" cols="50" name="news" > </textarea><br>
    imagenes:<br>
    <input type="text" name="img" value="">
    <br><br>
    <input type="submit" value="crear">
    </form>
    <hr>
</body>
</html>
<?php
$sql2 = "SELECT * FROM blog";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. "<br> title: " . $row["tit"]. "<br> info:" . $row["news"]. "<br> <img width='20%' src=img/" . $row["img"] . ">";
        ?>
        <html>
           <body>
<form action="delete.php" method="GET">
        ID:<br>
       <input type="text" name="Id" value="<?php echo $row["id"] ?>"><br>
       <input type="submit" value="borrar">
       </form>
      

       <form action="update.php" method="GET">
    ID:<br>
    <input type="text" name="Id" value="<?php echo $row["id"] ?>"><br>
    titulo:<br>
    <input type="text" name="tit" value="<?php echo $row["tit"] ?>"><br>
    noticia:<br>
    <textarea rows="4" cols="50" name="news" ><?php echo $row["news"] ?> </textarea><br>
    imagenes:<br>
    <input type="text" name="img" value="<?php echo $row["img"] ?>">
    <br><br>
    <input type="submit" value="modificar">
    </form>

 <br><hr>








    </body>
</html>
<?php
    }
} else {
    echo "0 results";
}
