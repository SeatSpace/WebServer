<?php
	$MyUsername = "kkmonlee_insert";
	$MyPassword = "seatspace";
	$MyHostname = "localhost";

	$dbh = mysql_pconnect($MyHostname, $MyUsername, $MyPassword);
	$selected = mysql_select_db("kkmonlee_seatspace", $dbh);
 ?>
