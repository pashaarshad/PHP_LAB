<?php
     $n = 5;
        for($i=0;$i<=$n;$i++)
        {
            
            for($j=0;$j<=$n-1;$j++)
            {
                if($i == $j){
                    echo "$i";
                }
                else{
                    echo"*";
                }
            }
            echo "<br>";
        }

?>