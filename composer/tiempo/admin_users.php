<?php
session_start();
if (!isset($_SESSION['user'])) {   
    header('Location: '."login.html");
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

a:hover {
  background-color: #111;
  color: white;
}
</style>
<body>
<div><a href="crear_usuario.php" target="_blank">crear usuario</a></div>
<div><a href="borrar_usuario.php">borrar usuario</a></div>

    
</body>
</html>