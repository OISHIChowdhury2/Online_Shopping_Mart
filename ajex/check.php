<?php 
$conn=mysqli_connect("localhost","root","","project");
if(isset($_POST["user_name"]))
{
	$sql="SELECT * FROM user where username ='".$_POST["user_name"]."'";
	$result=mysqli_query($conn,$sql)
	if (mysqli_num_rows($result)>0) {
		# code...
		
	} else {
		# code...
	}
	
}

?>