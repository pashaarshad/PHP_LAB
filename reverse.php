<?php

$num = 819;
$rem = 0;
$rev= 0;
$sum = 0;

while($num!=0){
    $rem = $num % 10;
    $sum=$sum+$rem;
    $rev = $rev * 10+$rem;
    $num = intval($num/10);
}

echo "The Reverse is : $rev";
echo "The sum is : $sum ";


?>