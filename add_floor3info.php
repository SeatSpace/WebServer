<?php
	include("dbconnect.php");

	$SQL = "UPDATE kkmonlee_seatspace.Floor3Info SET x = '".$_GET["x"]."', y = '".$_GET["y"]."', width = '".$_GET["width"]."', height = '".$_GET["height"]."' WHERE id = '".$_GET["id"]."'";

	mysql_query($SQL);

	header("Location: review_floor3info.php");
 ?>
