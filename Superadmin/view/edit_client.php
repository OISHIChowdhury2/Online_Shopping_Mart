<?php
	$title= "Home Page";
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client Information</title>
</head>
<body>
	<form method="post" action="#"> 
	<table border="1" align="center" width="790px">
		<tr>
			<td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">

<table  align="right"  >
	<tr>
		<td>
			<label>Signed_in_as</label>
<a href="viewprof.php">
<?php 
 echo $_SESSION['username'];
 ?>
	</a>
</tr>
</table>
</td>
</tr>
</td>
</tr>

<tr>
<td>

	<table border="" align="right">
				
<input type="text" placeholder="Search..">
					
				</table>

</td>
<tr>
	<td>
		<table>
			
<td>

	<table align="center">
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="Bhai"> </td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="text" name="password" value="zigzag"> </td>
					</tr>
				
				
					<tr>
						<td>
							
						</td>
						<td align="right">
							<br>
							<input type="submit" name="signup" value="Update">
						</td>


					</tr>
				</table>


</td>
</table>
</td>
</tr>						


              

         <tr>
			<td colspan="2" height="30px">
				Since 2021	
				<table align="right">
					<td>
			<a href="client_info.php">Back</a>
			</td>

				
		</tr>
		


	</table>

</body>
</html>
