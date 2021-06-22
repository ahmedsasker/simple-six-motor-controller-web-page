<!DOCTYPE html>
<html id="data" >

	<?php 
	$m1 = 1;
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "robot";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "select * from data where id=(select max(id) from data)";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		// echo $row["m1"] . " " . $row["m2"] . " " . $row["m3"] . " " . $row["m4"] . " " . $row["m5"] . " " . $row["m6"] . " " . $row["state"];
		

		$conn->close();
	
	?>
	<h2 id="m1"><?php echo $row["m1"] ?></h2>
	<h2 id="m2"><?php echo $row["m2"] ?></h2>
	<h2 id="m3"><?php echo $row["m3"] ?></h2>
	<h2 id="m4"><?php echo $row["m4"] ?></h2>
	<h2 id="m5"><?php echo $row["m5"] ?></h2>
	<h2 id="m6"><?php echo $row["m6"] ?></h2>
	<h2 id="state"><?php echo $row["state"] ?></h2>
</html>