<?php

        $ele = array(10,20,25,18,32,12);
        $ele_new = 15;
        $pos = 3;
        echo "Before Inserting elements are :","</br>";
        foreach($ele as $x)
        {
            echo"$x"." ";
        }
        array_splice($ele,$pos,0,$ele_new);
        echo" <br> After Inserting element of $ele_new the array elemer are : "."</br>";
         foreach($ele as $x)
        {
            echo"$x"." ";
        }

?>