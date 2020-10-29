<?php 
function getLowerNumber($num) 
{ 
    if( $num % 2 == 0 && $num % 3 == 0 && $num % 10 == 0 ){ 
        
    } else { 
        $num = getLowerNumber($num + 1); 
    } 
    return $num;
} 
$num = 1; 
$res = getLowerNumber($num);
echo "Lower Number is: ".$res;