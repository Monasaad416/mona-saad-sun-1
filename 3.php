<?php

// $i will be counter increased from 0 to 5 by step =1
for($i=0 ;$i<6 ;$i++){
    //for each count of i they will be onother count $j <=$i so if $i=2 so $j=2 & it will break one * for each loop in same line 
    //as we don't write break line after each"*"
    for($j=1;$j<=$i;$j++){
        echo "*";
    }
    echo "<br/>";   
};
    //for each count of i they will be onother count $j <=5-$i so if $i=2 so $j=3 so in third loop for ex * 
    //will be decreased to 3 & it will break one * for each loop in same line 
    //as we don't write break line after each"*" 
for($i=0 ;$i<5;$i++){
    for($j=1;$j <= 5-$i ; $j++){
        echo "*";
    }
    echo "<br/>";  
};

?>

