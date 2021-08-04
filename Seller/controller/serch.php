<?php
		
$conn=mysqli_connect('localhost','root','','project');

	$name = $_REQUEST['name'];
	$sql = "select * from products where name  like '%{$name}%' ";

	if($name=="")
	{
		echo "";
	}
	else{
	
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		
		 echo $row['name'] . " " . $row['price']." ".$row['image']."<br>";
	}

	//$response .= "</table>";

	//echo "Sorry not available now";
}

?>