<?php
	$link = new mysqli("localhost","root","","onlineDelivery");

	if ($link->connect_error) {
		die("Database Connection Promlem ...");
	}
 ?>