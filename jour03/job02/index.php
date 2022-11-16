<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$a = 0;
$i= 0;
while (isset($str[$i])) {   
    $a++;
    $i++;
 }
for ($i =0; $i < $a; $i++) {
    if ($i % 2 == 0) {                 
       echo $str[$i];
    }
 }
?>