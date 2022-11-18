    <?php

$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
echo "$str <br> <br>";

$voyelles = 0;
$consonnes = 0; 

$array_consonnes = ["b", "c", "d", "f", "g", "h", "j","k", "l", "m", "n", "p","q", "r", "s", "t", "v", "w", "x", "z"];
$array_voyelles = ["a", "e", "i", "o", "u", "y", "A", "E", "I","O", "U", "Y"];

for ($i = 0; isset($str[$i]); $i++){
    for($a = 0; isset ($array_voyelles[$a]); $a++){
        if ($str[$i] == $array_voyelles[$a]){
            $voyelles++;
        }
    }
    for($b = 0; isset ($array_consonnes[$b]); $b++){
        if ($str[$i] == $array_consonnes[$a]){
            $consonnes++;
        }
    }
}
    $dic = [ "voyelles" => $voyelles ,
             "consonnes" => $consonnes];

echo "<table border=2>
    <thead>
        <tr>
            <th>Consonnes</th>
            <th>Voyelles</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>$consonnes</td>
            <td>$voyelles</td>
        </tr>
    </tbody>
</table>"
?>
