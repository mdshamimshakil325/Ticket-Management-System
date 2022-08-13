<?php
	require_once "controllers/busController.php" ;
	$buses = getAllbuses();
?>

<html>
<link rel="stylesheet" href="style/removeBus.css">
    <head> 
	     <title>Remove Bus</title></head>
	<body>
		<center><h1>Removed Bus </h1></center>
		     
	<center>			
		<table border="1" style="border-collapse:collapse;">
		<thead>
				<th class="tableHeader">Serial</th>
				<th class="tableHeader">Bus Name</th>
				<th class="tableHeader">Departure Station</th>
				<th class="tableHeader">Arrival Station</th>
				<th class="tableHeader">Via Station</th>
				<th class="tableHeader">Departure Time</th>
				<th class="tableHeader">Arrival Time</th>
				<th class="tableHeader">Rent</th>
                <th class="tableHeader">Remove</th>
				
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
							
							echo '<td><a href="removeBus1.php?id='.$bus["id"].'">Delete</a></td>';
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>