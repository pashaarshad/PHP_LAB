<?php

    $num = 5;
    $f1 = 0;
    $f2 = 1;
    $f3 = 0;

    for($i=0;$i<=$num;$i++)
        {   
            $f3=$f1+$f2;
            echo $f3." ";
            $f1=$f2;
            $f2=$f3;
        }

?>