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


		if ($_POST['PRO']!='null') $_POST['PRO'] = '\''.$_POST['PRO'].'\'';

	$sql = "UPDATE `master_data_test`.`repair` 
			SET
			`Item Code`='".$_POST['Item']."', 
			`Repair form`='".$_POST['RepForm']."', 
			`Str ID`='".$_POST['DeptStr']."'	, 
			`Repair Details`='".$_POST['RepDet']."', 
			`War ID`='".$_POST['WarType']."', 
			`Date of purchase`='".$_POST['DoP']."', 
			`PRO Num`='".$_POST['PRO']."', 
			`Loc ID`='".$_POST['Loc']."', 
			`Date receipt from customer`='".$_POST['DRFC']."', 
			`Date arrived at company`='".$_POST['DAC']."', 
			`Date send to factory`='".$_POST['DSF']."', 
			`Date receipt back from factory`='".$_POST['DRFF']."', 
			`Date return to department store`='".$_POST['DRDS']."',
			`Send method ID`='".$_POST['SendType']."', 
			`Person sent`='".$_POST['PerSent']."',
			`Note`='".$_POST['Note']."'

			WHERE `Repair ID`='".$_POST['RepID']."';";

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