<?php
   //	require_once('../model/config.php');

   	$username = $_GET["username"];

   	$conn =mysqli_connect('localhost','root','','project');

    $sql="select * from user where username='{$username}'";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);



	if($num==0 || $username == ''){
		echo "false";
	}
	else{
		echo "true";
	}


	?>