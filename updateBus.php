<?php
	require_once "controllers/busController.php" ;
	$buses = getAllbuses();
?>

<html>
<link rel="stylesheet" href="style/updateBus.css">
    <head> 
	     <title>Book Bus</title></head>
	<body>
		<center><h1>Book Bus </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th class="tableHeader">Serial No</th>
				<th class="tableHeader">Bus Name</th>
                <th class="tableHeader">Departure Station</th>
                <th class="tableHeader">Departure Station</th>
                <th class="tableHeader">Arrival Station</th>
                <th class="tableHeader">Via Station</th>
                <th class="tableHeader">Departure Time</th>
                <th class="tableHeader">Arrival time</th>
                <th class="tableHeader">Rent</th>
                <th class="tableHeader">Book</th>
				
			</thead>
			<tbody>
				<?php
					foreach($buses as $bus)
					{
						echo "<tr>" ;
							echo "<td>".$bus["id"]."</td>" ;
							echo "<td>".$bus["bname"]."</td>" ;
							echo "<td>".$bus["dstation"]."</td>" ;
							echo "<td>".$bus["astation"]."</td>" ;
							echo "<td>".$bus["vstation"]."</td>" ;
							echo "<td>".$bus["dtime"]."</td>" ;
							echo "<td>".$bus["atime"]."</td>" ;
							echo "<td>".$bus["rent"]."</td>" ;
							echo '<td><a href="bookBus.php">Book bus</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>