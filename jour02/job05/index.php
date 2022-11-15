<?php
    
     //On prend chaque nombre entre 2 et 1000 (0 et 1 n'étant pas premier)    
    for($i=2 ; $i<=1000 ; $i++){
        $nbDiv = 0;    
        for($j=1 ; $j<=$i ; $j++){
            if($i % $j == 0){
                $nbDiv++;            
                }
            }
//ouvre une condition qui prend en compte que les chiffres du resultat precedant qui ont un nombre de diviseur égale à 2
//Un nombre premier est un chiffre qui ne possède que 2 diviseur (1 et lui-même)
            if($nbDiv == 2){  
            echo $i."<br>";  
            }                
        }
?>