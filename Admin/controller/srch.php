<?php

		
		$conn=mysqli_connect('localhost','root','','project');

	$name = $_REQUEST['name'];
	$sql = "select * from client where name  like '%{$name}%' ";

	if($name=="")
	{
		echo "kichu nai";
	}
	else{
	
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {

		 echo $row['id'] . " " . $row['name']." ".$row['sname']."<br>";
	}

}
?>