<?php

	
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "master_data_test";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,"utf8");

	
	if ($conn -> connect_error) {
		die("Connection failed: ". $conn -> connect_error);
	}
	else{
		echo "Connected successfully"."<br>";
	}

	$sql = "SELECT 
			`DETAL`,
			`Repair form`, 
			`Department store`, 
			`Repair Details`, 
			`Customer Tel`,
			CONCAT_WS (' ', Fname, MName, Lname) as 'Customers name',
			`Warranty Type`, 
			`Date of purchase`, 
			`PRO Number`, 
			`Location Name`, 
			`Date receipt from customer`, 
			`Date arrived at company`, 
			`Date send to factory`, 
			`Date receipt back from factory`, 
			`Date return to department store`, 
			`Sent method`, 
			`Person sent`, 
			`Note` 

			FROM `master_data_test`.`repair`

			left join `master_data_test`.`item` 
			on `repair`.`Item Code` = `item`.`ITEM`

			left join `master_data_test`.`warranty` 
			on `repair`.`War ID` = `warranty`.`Warranty Id`
            
            left join `master_data_test`.`customer` 
			on `repair`.`Customer Tel` = `customer`.`Tel`
            
            left join `master_data_test`.`department store` 
			on `repair`.`Str ID` = `department store`.`Store ID`
            
            left join `master_data_test`.`pro` 
			on `repair`.`PRO Num` = `pro`.`PRO Number`
            
            left join `master_data_test`.`location` 
			on `repair`.`Loc ID` = `location`.`Location ID`
        
			left join `master_data_test`.`send`
			on `repair`.`Send method ID` = `send`.`Send ID`

            WHERE `Customer Tel`='".$_POST['TelNum']."'
            
            group by `Repair ID`;";
	
	$result = $conn -> query($sql);
	
	if ($result -> num_rows > 0) {
	
	// output data of each row
		while($row = $result -> fetch_assoc()) {
			echo 
				"Item: ".$row["DETAL"]."<br>".
				"Repair form number: ".$row["Repair form"]."<br>".
				"Department store: ".$row["Department store"]."<br>".
				"Repair details:".$row["Repair Details"]."<br>".
				"Repair form number: ".$row["Repair form"]."<br>".
				"Customer Tel: ".$row["Customer Tel"]."<br>".
				"Customers name: ".$row["Customers name"]."<br>".
				"Warranty type: ".$row["Warranty Type"]."<br>".
				"Date of purchase: ".$row["Date of purchase"]."<br>".
				"PRO Number: ".$row["PRO Number"]."<br>".
				"Repair location: ".$row["Location Name"]."<br>".
				"Date receipt from customer: ".$row["Date receipt from customer"]."<br>".
				"Date arrived at company: ".$row["Date arrived at company"]."<br>".
				"Date send to factory: ".$row["Date send to factory"]."<br>".
				"Date receipt back from factory: ".$row["Date receipt back from factory"]."<br>".
				"Date return to department store: ".$row["Date return to department store"]."<br>".
				"Send method type: ".$row["Sent method"]."<br>".
				"Person sent: ".$row["Person sent"]."<br>".
				"Note:".$row["Note"].
				"<br>";
		}
	} else {
		echo "0 results";
	}
?>