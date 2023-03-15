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
	
	 $stmt = $con->prepare("DELETE FROM crudapp WHERE id=?");
	 $stmt->bind_param('d', $id);
	 $id = $_REQUEST["id"];

	 $result=$stmt->execute();
	
	if($result)
	 {
		 echo "Deleted";
	 }
	 else
	 {
		 echo "Not Deleted";
	 } 
	
	// header("refresh:2; url="index.php");
?>
