<?php   

    $units = 800;



    if($units <= 100){
        $price = $units * 2;
    }
    elseif($units > 100 && $units <= 200){
        $price = 200+($units - 100 * 3);
    }
    else{
        $price = 200 + 600 +($units - 300 )*5;
    }

    echo "The price is  $price ";
?> 


