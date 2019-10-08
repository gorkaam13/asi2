<?php
$user1="koxme";
$user1_password = "p1";
$user2="ander";
$user2_password = "p2";




//leer desde formularioS
$user = $_GET['user'];
$password= $_GET['password'];

//echo "kaixo";



if ($user =='koxme'){
    if ($password == 'p1'){
        echo "ok";
   }  else {
        echo "ko";
    }

} else if ($user =='ander'){
    if ($password == 'p2'){
        echo "ok";
    }  else {
        echo "ko";
    }

} else {
    echo "ko";
}



?>