<?php
	$username = 'mcurry';
	$password = 'Peyton#01';

	try {
		$dbh = new PDO('mysql:host=localhost;dbname=mcurry_GRTechSched', $username, $password);
		echo "success";
	}
	catch (PDOException $e) {
		die("Error!: " . $e->getMessage());
	}
	?>