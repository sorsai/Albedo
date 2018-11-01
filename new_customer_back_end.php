<?php

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "master_data_test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,"utf8");
	
	// // select database
	// $conn = mysqli_select_db($conn, "university");

	// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: ". $conn -> connect_error);
	}
	else{
		echo "Connected successfully"."<br>";
	}

	$sql = "INSERT INTO `master_data_test`.`customer` (`Tel`, `Fname`, `MName`, `Lname`)
			VALUES (
			'".$_POST['TelNum']."',
			'".$_POST['FName']."',
			'".$_POST['MName']."',
			'".$_POST['LName']."');";

	#$sql = "UPDATE university.student SET lastname='Doe' WHERE id=2”;
	#$sql = "DELETE FROM university.student WHERE id=3";

	if ($conn->query($sql) === TRUE) {
		echo "New customer record created successfully"."<br>";
		header("Location: dashboard.php");
    	exit();

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	
?>