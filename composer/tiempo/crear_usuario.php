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
<body>
    <!--
    <form action="login2.php" method="GET">
    -->
    <form action="crear.php" method="GET">
    name:<br>
    <input type="text" name="user" value=""><br>
    password:<br>
    <input type="password" name="password" value="">
    <br><br>
    <input type="submit" value="crear">
    
    </form>
</body>
</html>