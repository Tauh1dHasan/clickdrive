<?php  
	// Database connection
	$conn = mysqli_connect('localhost', 'root', '', 'clickdrive');

	// Checking Database connection
	if (!$conn) {
		echo "Connection Fail: " . mysqli_connect_errno($conn);
		die();
	}
?>