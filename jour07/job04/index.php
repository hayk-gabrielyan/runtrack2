<?php


function calcule ($a, $operation , $b ){
    if( $operation == "+"){
        echo $a + $b;
    }
    elseif( $operation == "-"){
        echo $a - $b;
    }
    elseif( $operation == "*"){
        echo $a * $b;
    }
    elseif( $operation == "/"){
        echo $a / $b;
    }
    elseif( $operation == "%"){
        echo $a % $b;
    }
}

echo calcule(12, "+" ,3 ) . "<br>";
echo calcule(12, "-" ,3 ) . "<br>";
echo calcule(12, "*" ,3 ) . "<br>";
echo calcule(12, "/" ,3 ) . "<br>";
echo calcule(112, "%" ,3 ) . "<br>";

?>