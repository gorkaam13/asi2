<?php
/*
$g = ["gorka", "anakabe", "miguez"];
$gg = [13,13,13,24];


foreach ($gg as $xx) {
 echo  $xx . "<br>";
} 

foreach ($g as $x) {
    echo  $x . "<br>";
   } 
*/

echo "<h1>2d array</h1>";

$y = [[1,2,3],[4,5,6]];

foreach ($y as $b) {
    foreach ($b as $bb) {
         echo  $bb . "<br>";
    }
   } 
