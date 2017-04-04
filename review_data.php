<?php
	$servername = "localhost";
	$username = "kkmonlee_insert";
	$password = "seatspace";
	$dbname = "kkmonlee_seatspace";

	// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT id, isAvailable, address FROM tables";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - isAvailable: " . $row["isAvailable"]. " - address: " . $row["address"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
 ?>
