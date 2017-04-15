<?php
	$servername = "localhost";
	$username = "kkmonlee_insert";
	$password = "seatspace";
	$dbname = "kkmonlee_seatspace";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT id, x, y, width, height FROM Floor3Info";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "ID: " . $row["id"]. ", x: " . $row["x"]. ", y: " . $row["y"]. ", width: " . $row["width"]. ", height: " . $row["height"]. "<br>";
		}
	} else {
		echo "0 results";
	}

	$conn->close();

	$page = $_SERVER['PHP_SELF'];
	$sec = "5";
	header("Refresh: $sec; url = $page");
 ?>
