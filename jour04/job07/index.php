<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style-m.css">
    <title>My test page</title>
  </head>
  <body>

    <form action="" method="get">
        <div>
            <label for="largeur">Entrez la largeur :</label>
            <input type="texte" name="largeur">
        </div>
        <div>
            <label for="hauteur">Entrez la hauteur :</label>
            <input type="texte" name="hauteur">
        </div>
        <div class="button">
            <button type="submit">Valider</button>
        </div>
    </form>
    <pre><?php

        $e = "&nbsp;"; 
        $s = "_";

            if (isset($_GET['largeur']) && isset($_GET['hauteur'])){
                $largeur = intval($_GET['largeur']);
                echo "La largeur est de : ".$largeur;
                echo "<br>";
                $hauteur = intval($_GET['hauteur']);
                echo "La hauteur est de : ".$hauteur;
                echo "<br>";
                echo "<br>";

                for ($h1 = 0; $h1 < $largeur/2; $h1++){ 
                    for ($j = $largeur/2; $j > $h1; $j--){
                        echo $e;
                    }
                    echo "/"; 
                    for ($x = 0; $x < $h1; $x++){
                        echo $s;
                        echo $s;
                    }
                    echo "\\";
                    echo "<br>";
                } 
                for ($h2 = 0; $h2 < $hauteur; $h2++){ 
                    if ($h2 == 0){
                        echo "T";
                    }
                    else{
                        echo "|";
                    }
                    if ($h2 == $hauteur-1){
                        for ($y = 0; $y < $largeur; $y++){
                            echo $s;
                        }
                    }
                    else{
                        for ($y = 0; $y < $largeur; $y++){
                            echo $e;
                        }
                    }
                    if ($h2 == 0){
                        echo "T";
                    }
                    else{
                        echo "|";
                    }
                    echo "<br>";
                }
            }
            else{
                echo "Remplissez les cases pour construire la maison";
            }
        ?></pre>
</body>
</html>