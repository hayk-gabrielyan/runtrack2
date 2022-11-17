
<?php 

echo $_GET['user_name'], '<br>' ; 

echo $_GET['user_mail'] , '<br>' ; 

echo $_GET['user_message'] , '<br>'; 


//echo "nombre d'arguments est : " , sizeof($_GET);
$nombre=0;
foreach ($_GET as $cle => $valeur) {
//echo 'La clé ' . $cle . ' contient la valeur ' . $valeur . "\n";
    $nombre++;
}
echo "<p> Nombre des arguments : $nombre <p>";
?>