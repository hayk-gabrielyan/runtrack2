<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
$mysqli->set_charset("utf8");

$request = $mysqli->query("SELECT  SUM(superficie) FROM etage ;");

$result = $request -> fetch_array(MYSQLI_ASSOC);


    echo "<table border=1> <thead>";
        foreach ($result as $clé => $valeur)
        {
        echo " <th> ". "superficie_totale" . " </th> ";
        }
    echo "</thead>";


while($result != NULL){
    echo "<tbody>";
        foreach ($result as $valeur)
        {
        echo  "<td>" . $valeur ."</td>"   ;
        }
    echo "</tbody>";
    $result = $request -> fetch_array(MYSQLI_ASSOC);
}
echo "</table>";

?>
</body>
</html>