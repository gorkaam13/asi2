<?php
$v = [1,5,6,99,12,11,111,1];
$suma = 0;

//$suma = $v[0]+$v[1]+$v[2]+$v[3]+$v[4]+$v[5]+$v[6];
/*
for ($i = 0; $i < count($v); $i++) {

    $suma = $suma + $v[$i];
 }
    echo $suma;
  */  


/*
 $i = 0;

while($i < count($v)) {
    $suma = $suma + $v[$i];
    $i++;
}

echo $suma;
*/


foreach ($v as $p) {

  $suma = $suma + $p;
  }
echo $suma;




