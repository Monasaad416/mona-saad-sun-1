<?php
$num=3;

//nul coalescing operator if num =0 it will returns "Zero",if num = 1 it will returns 1 ...
    $word =match($num){
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
    };
    //print the correct case
echo $word;
echo"<hr>";

?>