<?php

    $num = 1124;
    $sum = 0;
    $pro = 1;
    $rem = 0;

    while($num != 0){
        $rem =$num % 10;

        $sum += $rem;
        $pro *=$rem;
        $num =intval($num/10);

    }

    if($sum == $pro){
        echo "It is a Spy Number";
    }
    else{
        echo"It is not a spy number";
    }

?>