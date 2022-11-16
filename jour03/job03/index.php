<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = ["a", "e", "i", "I", "o", "u", "y"]; 

for($i = 0; isset($str[$i]); $i++){
    for($a = 0; isset($voyelles[$a]); $a++)
        if($str[$i] == $voyelles[$a]){
            echo $str[$i];
    }
}
?>