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

	$sql = "SELECT id, taken, time FROM Floor3";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "ID: " . $row["id"]. " - Is Taken: " . $row["taken"]. " - Date & Time: " . $row["time"]. "<br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();

	$page = $_SERVER['PHP_SELF'];
	$sec = "5";
	header("Refresh: $sec; url = $page");
 ?>
