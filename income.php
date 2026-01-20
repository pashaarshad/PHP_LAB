<?php

	$income = 3.8;

	if($income < 2.5)
	{
		echo"No Tax , SO income = ",$income;
	}	
	elseif($income > 2.5 and  $income <3.5)
	{	
		$cal = $income - 1.8;
		$ans = $cal * 5%;
		$final = $ans + 1.8;
		echo "Tax is 5 % = $cal*5%";
	}
	elseif($income > 3.5 and  $income <5)
	{
		echo"Tax of 10% =  $income*10%" ;
	}

	else{
		echo"Tax of 15 and 3 sas  ";
	}

?>