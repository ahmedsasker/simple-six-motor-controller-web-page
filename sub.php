<?php 

	if($_POST['m1']){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "robot";
		$m1 = $_POST['m1'];
		$m2 = $_POST['m2'];
		$m3 = $_POST['m3'];
		$m4 = $_POST['m4'];
		$m5 = $_POST['m5'];
		$m6 = $_POST['m6'];
		$state = $_POST['state'];
		if($state=="on") $state = '"on"';
		else $state = '"off"';
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO data (m1, m2, m3, m4, m5, m6, state)
		VALUES ($m1,$m2,$m3,$m4,$m5,$m6,$state)";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

	if($_POST['move']){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "robot";
		$m1 = $_POST['move'];
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}

		$sql = "INSERT INTO movement (direction)
		VALUES ('$m1')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>
