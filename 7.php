
<?php
$x = 3 ; $y=$x++;
//first y=3 then it Will add 1 now x=4 and y=4




$y+= ++$x;
//y=y+x;
//y=4 from last step,x will be increased by one then added ti y  
//y=4 +5 =9

 
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
     //no output as y=9
 }
else if ($y == 8){
 	$x--;
 	echo $x ."<br>";
      //no output as y=8
    
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
	//last value to x=5 ,x=x+2 =7
    //x=7

}
else { 
	$x= 0;
	echo $x ."<br>"; 
 //no output as y=9
}
?>
