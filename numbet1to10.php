<?php
        function asc($n){
            if ($n > 10){
                return;
            }
           echo $n++;
            return asc($n);
        }

        echo asc(1);

?>