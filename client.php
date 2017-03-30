<?php
	$n = "arduino1.txt";
	$f = fopen($n, 'w');
	$value = $_GET['value'];
	fwrite($f, $value);
	fclose($f);
 ?>
