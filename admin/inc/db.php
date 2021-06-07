<?php  
	// Database connection
	// Replace the 'root', with Database User name.
	// Replace the '' with Database User Password.
	// Replace the 'clickdrive' with Database name.
	// Save changes.
	$conn = mysqli_connect('localhost', 'root', '', 'clickdrive'); 

	// Checking Database connection
	if (!$conn) {
		echo "Connection Fail: " . mysqli_connect_errno($conn);
		die();
	}
?>