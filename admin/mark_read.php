<?php
require "inc/security.php";
require "inc/db.php";
	if (empty($_GET['id'])) {
		echo "<script> alert('Please select a message first..!!') </script>";
		echo "<script> location = 'unread_message.php' </script>";
	}else{
		$id = mysqli_escape_string($conn, $_GET['id']);

		$sql = mysqli_query($conn, "UPDATE leads SET status = 'old' WHERE id = '$id' ");

		if ($sql) {
			echo "<script> location = 'unread_message.php' </script>";
		}else{
			echo "<script> location = 'unread_message.php' </script>";
		}
	}
?>