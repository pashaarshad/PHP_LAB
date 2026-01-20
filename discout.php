<html>
	<head>
	</head>
	<style>
		table,th,td{
        border: 1px solid black;
    }

	</style>
	<body>
		<h1> Welcone to the Arshad Pasha Coding</h1>
		<?php
			include "index.html";
			$ammout = 50000;
			$net = 0;
			
			if ($ammout > 70000)
			{	
				$discount = $ammout * 0.18;
			  	$net = $ammout - $discount;
				
			}
			elseif($ammout > 55001 and $ammout < 70000){
				$discount = $ammout * 0.16;
			  	$net = $ammout - $discount;
			}
			elseif($ammout > 35001 and $ammout < 70000){
				$discount = $ammout * 0.16;
			  	$net = $ammout - $discount;
			}
			elseif($ammout > 55001 and $ammout < 70000){
				$discount = $ammout * 0.10;
			  	$net = $ammout - $discount;
			}
			else{
				$discount = $ammout * 0.02;
				$net = $ammout - $discount;
			}
			// include(index.html);

			echo"
				 
				<table>
					<th>
						<td> SI NO </td>
						<td> Name</td>
						<td> Ticket Charges</td>	
						<td> Discont</td>
						<td> New Amout</td>
					<th>

					<tr>
						<td> </td>
						<td> 1</td>
						<td> Arshad </td>
						<td> $ammout</td>	
						<td> $discount% </td>
						<td> $net</td>
					</tr>

											
				<table>




 			" 


		?>
	</body>
</html>