<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con)
	{
		echo "Not connected to server";
	}
	if(!mysqli_select_db($con, 'crud'))
	{
		echo "Database Not Started";
	}
	

	$stmt = $con->prepare("INSERT INTO crudapp (fullName,empCode,salary,city) VALUES (?, ?, ?, ?)");
	$stmt->bind_param('ssss', $fullName, $empCode, $salary, $city);

	$fullName = $_POST["fullName"];
	$empCode = $_POST["empCode"];
	$salary = $_POST["salary"];
	$city = $_POST["city"];

	if(!$stmt->execute())
	{
		echo "Not Inserted";
	}
	else
	{
		// echo "Inserted";
		$id = 	mysqli_insert_id($con);
		echo $id;
	}
	
	// header("refresh:2; url="index.php");
	
?>
