<?php

function leetSpeak($str) {

    $array = ['4' => ['a', 'A'] , '8' => ['b', 'B'] , '3' => ['e', 'E'] , '6' => ['g', 'G'] , '1' => ['l', 'L'] , '5' => ['s', 'S'] , '7' => ['t', 'T']];

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($array as $key => $value) {
            if ($str[$i] === $value[0] || $str[$i] === $value[1]) {
                $str[$i] = $key;
            }
        }
    }
    return $str;
}
echo leetSpeak('Lorem Ipsum is simply dummy text of the printing and typesetting industry. ') . '<br />';
?>