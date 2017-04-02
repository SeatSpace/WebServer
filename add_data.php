<?php
	include("dbconnect.php");

	$SQL = "INSERT INTO kkmonlee_seatspace.test (isAvailable, address) VALUES ('".$_GET["value"]."', '".$_GET["address"]."')";

	mysql_query($SQL);

	header("Location: review_data.php");
 ?>
