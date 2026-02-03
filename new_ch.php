<?php
        function ans($n){

            if ($n >= 9){
                return;
            }
          
             echo $n--,$n=$n+3;
    
            return ans($n);
        }

        echo ans(2);

?>











