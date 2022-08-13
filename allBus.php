<?php
	require_once "controllers/busController.php" ;
	$buses = getAllBuses();
?>

<html>
    <head> 
	     <title>All Buses</title>
		 <link rel="stylesheet" href="style/allBus.css">
		</head>
	<body class = "BodyBackground">
		<center><h1 class="Heading">ALL Bus</h1></center>
		      <h2 align="center">
			        <span class = "addBus"><a  style="text-decoration:none" href="addbus.php" target="_self" >Add Bus &nbsp</a> </span> 
					<span class = "addBus"><a  style="text-decoration:none" href="removeBus.php" target="_self" >Remove Bus &nbsp</a> </span>
					<span class = "addBus"><a  style="text-decoration:none" href="searchBus.php" target="_self" >Search Bus &nbsp</a> </span>
					<span class = "addBus"><a  style="text-decoration:none" href="homepage.php" target="_self" >Back &nbsp</a> </span>

              </h2>
	<center>			
		<table  border="1"  style="border-collapse:collapse;">
		<thead >
				<th class="tableHeader">Serial No</th>
				<th class="tableHeader">Bus Name</th>
                <th class="tableHeader">Departure Station</th>
                <th class="tableHeader">Arrival Station</th>
                <th class="tableHeader">Via Station</th>
                <th class="tableHeader">Departure Time</th>
                <th class="tableHeader">Arrival time</th>
                <th class="tableHeader">Rent</th>
				
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
						echo "</tr>" ;
					}
				?>
		   </tbody>
			
			
			
		</table>
	<center>    
        </body>
</html>