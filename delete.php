<?php
	$mysqli = new mysqli("127.0.0.1","root"," ","crud");
	if ($mysqli -> connect_errno) 
	{
		echo "Not connected to server";
	}
	$id = $_REQUEST["id"];

	 $sql = "DELETE FROM crudapp WHERE id =".$id."";
	 $result=$mysqli -> query($sql);
	
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
