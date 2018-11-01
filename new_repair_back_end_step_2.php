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

	$CusTel = "SELECT MAX(`Cus ID`) as tel FROM `master_data_test`.`customer`;";
	$result = $conn -> query($CusTel);
	$test = $result -> fetch_assoc();
	// echo $test['tel'];

	 if ($_POST['PRO']!='null') $_POST['PRO'] = '\''.$_POST['PRO'].'\'';

	// if(empty($_POST['PRO'])) 
	// 	{
	// 	  $_POST['PRO'] = null;
	// 	}
// ECHO $_POST['PRO'] ."<br><br><br><br>";
// $tt = $_POST['PRO'];

	$sql = "INSERT INTO `master_data_test`.`repair` (`Item Code`, `Repair form`, `Str ID`, `Repair Details`, `Customer ID`, `War ID`, `Date of purchase`, `PRO Num`, `Loc ID`, `Date receipt from customer`, `Date arrived at company`, `Date send to factory`, `Date receipt back from factory`, `Date return to department store`, `Send method ID`, `Person sent`, `Note`)
			VALUES (

			'".$_POST['Item']."', 	

			'".$_POST['RepForm']."', 
			'".$_POST['DeptStr']."', 
			'".$_POST['RepDet']."',

			'".$test['tel']."', 
			'".$_POST['WarType']."', 
			'".$_POST['DoP']."', 

			".$_POST['PRO'].", 
			'".$_POST['Loc']."',
			'".$_POST['DRFC']."', 

			'".$_POST['DAC']."', 
			'".$_POST['DSF']."',
			'".$_POST['DRFF']."', 

			'".$_POST['DRDS']."', 
			'".$_POST['SendType']."', 
			'".$_POST['PerSent']."', 

			'".$_POST['Note']."');";

	ECHO $sql ."<br><br><br><br>";

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