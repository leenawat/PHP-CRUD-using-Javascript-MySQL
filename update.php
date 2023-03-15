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

	
	$stmt = $con->prepare("UPDATE crudapp SET fullName=?, empCode=?, salary=?, city=? WHERE id=?");
	$stmt->bind_param('ssssd', $fullName, $empCode, $salary, $city, $id );

	$fullName = $_POST["fullName"];
	$empCode = $_POST["empCode"];
	$salary = $_POST["salary"];
	$city = $_POST["city"];
	$id = $_POST["id"];

	// echo $sql;
	if(! $stmt->execute())
	{
		echo "Not Updated";
	}
	else
	{
		echo "Updated";
	}
	
	// header("refresh:2; url="index.php");
	
?>
