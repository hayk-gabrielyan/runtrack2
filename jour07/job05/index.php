<?php

function occurences( $str, $char ) {
$count = 0;
for ($i=0; isset($str[$i]); $i++) { 
    if ($str[$i] == $char)
$count = $count +1;
}
return $count;
}

echo occurences("Bonjour", "o");
?>