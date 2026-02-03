<?php

function add($a,$b){
    return $a+$b;
}
function sub($a,$b){
    return $a-$b;
}
function mul($a,$b){
    return $a*$b;
}
function div($a,$b){
    return $a/$b;
}
function mod($a,$b){
    return $a%$b;
}

$ch=3;
switch($ch){
    case 1 : echo add(5,3);
            break;
    case 2 : echo sub(5,3);
            break;
    case 3 : echo mul(5,3);
            break;
    case 4 : echo div(5,3);
            break;
    case 5 : echo mod(5,3);
            break;
    default : echo"Choosh the Proper number";
            break;
            
}


?>