<?php

$num = 131;
$rem = 0;
$rev= 0;
$num1 = $num;

while($num!=0){
    $rem = $num % 10;
    $rev = $rev * 10+$rem;
    $num = intval($num/10);
}

if($num1 == $rev){
    echo"The  Given is Palindrome ";
}
else{
    echo "This not a palindrome";
}


?>