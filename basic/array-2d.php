<?php
$vv = [[1,2],[3,4]];
$suma = 0;

for ($i=0; $i < count($vv) ; $i++) { 
    for ($j=0; $j < count($vv[0]); $j++) { 
         $suma = $suma + $vv[$i][$j];
    };
};
echo "for:" . $suma . "<br>";


$suma = 0;
$i = 0;
while($i < count($vv)) {
    while ($j < count($vv[0])) {
        $j = 0;
    $suma = $suma + $v[$i][$j];
    $j++;
    } 
    $i++;
}

echo "while:" . $suma . "<br>";





$suma = 0;

foreach ($vv as $p) {
    foreach ($p as $pa) {
        $suma = $suma + $pa;
    }
   }
echo "foreach:" . $suma;



    $i++;