<?php
	include("dbconnect.php");

	//$SQL = "INSERT INTO kkmonlee_seatspace.Floor3 (id, taken, time) VALUES ('".$_GET["id"]."', '".$_GET["taken"]."', '".$_GET["time"]."')";
	date_default_timezone_set("Europe/London");

	$date = date('Y-m-d H:i:s');

	$SQL = "UPDATE kkmonlee_seatspace.Floor3 SET taken = '".$_GET["taken"]."', time = '$date' WHERE id = '".$_GET["id"]."'";

	mysql_query($SQL);

	header("Location: review_data.php");
 ?>
