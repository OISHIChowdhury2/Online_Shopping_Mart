<?php
session_start();
require_once('../model/query.php');

$conn=mysqli_connect('localhost','root','','project');
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_id($username);

if(isset($_POST['username'])) {

$sql="UPDATE owner set name='{$_POST['name']}',
phone='{$_POST['phone']}',
email='{$_POST['email']}',
password='{$_POST['password']}',
phone='{$_POST['phone']}'
WHERE
id='$id'
";
mysqli_query($conn,$sql);

header("Refresh:0");

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Edit</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body>
	<form method="post"> 
	<table border="1" align="center">
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
</td>
<td>
	<div>
	</div>
	
</td>

</td>
</tr>
	</table>
</td>
</tr>
			</td>
		</tr>

		<tr>
			<td>
		
<hr>
				<table>	
				<tr>
				
			
				
<td class="vertical-menu">
  <a href="#" class="active">Menu</a>
 <a href="sign_in_owner.php">Home&nbspPage</a>
  <a href="viewprof.php">View&nbspProfile</a>
  <a href="edit_prof.php">Edit Profile</a>
 <a href="reg_form.php">Add client</a>
  <a href="client_info.php">Client information</a>
  <a href="account.php">Account</a>
</div>

	
</ol>
</ul>
</td>



</table>

		
			<td>
				<b>Welcome Sir!</b> <table align="right"><table>
					<table border="1" align="center" width="790px">
						<tr>
							
<td>
	<div id="main_content">
		<table align="center"  width="30%">
			<tr>
				<td>
		
		<form method="post" action=""  >
			<fieldset>
				<legend>Update Profile</legend>
				<table align="center">
					<tr>
						<td>
	
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $user['name']; ?>">

<br>
	
UserName: <br>
<input type="text" name="username" class="txtField" value="<?php echo $user['username']; ?>">

<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $user['email'];?>">
<br>
Password:<br>
<input type="Password" name="password" class="txtField" value="<?php echo $user['password'];?>">
<br>

Phone:<br>					
<input type="text" name="phone"  value="<?php echo $user['phone']; ?>">

     <tr>
     	<td>
							<form action="../view/sign_in_owner.php">
							<input type="submit" name="update" value="Update">
							</form>
						</td>


					</tr>
				</table>
			</fieldset>
		</form>
	</div>

</td>
</tr>
</table>


 

     </td>

 </td>
</td>
						

							

							
						</tr>
				</table>
			</td>

              

         <tr>
			<td colspan="2" height="30px">
				Since 2021	
				<table align="right">
					<td>
			<a href="../controller/logout.php">Sign_out</a>
			</td>

				
		</tr>
		


	</table>

</body>
</html>
