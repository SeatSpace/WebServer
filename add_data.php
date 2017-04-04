<?php
	include("dbconnect.php");

	$SQL = "INSERT INTO kkmonlee_seatspace.tables (id, taken, time) VALUES ('".$_GET["id"]."', '".$_GET["taken"]."', '".$_GET["time"]."')";

	mysql_query($SQL);

	header("Location: review_data.php");
 ?>
