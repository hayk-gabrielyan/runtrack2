<?php

$str = "Dans l'espace, personne ne vous entend crier.";
echo $str;
$nombre=0;
for($i = 0; isset($str[$i]); $i++){ 
    $nombre++;
}

echo "<br>Il y a $i caractères dans cette phrase.";
?>