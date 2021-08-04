<?php
	
	require_once('config.php');
   
   function insertUser($user)
   {

		$conn = getConnection();
     $sql = "INSERT INTO ac values ('','{$user['total_price']}'";

		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
?>