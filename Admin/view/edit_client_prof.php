<?php
session_start();
require_once('../model/query.php');

$conn=mysqli_connect('localhost','root','','project');
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_id($username);

if(isset($_POST['username'])) {

$sql="UPDATE client set name='{$_POST['name']}',
phone='{$_POST['phone']}',
email='{$_POST['email']}',
nid='{$_POST['nid']}',
password='{$_POST['password']}',
dob='{$_POST['dob']}'
WHERE
id='$id'
";
mysqli_query($conn,$sql);

header("Refresh:0");

}
// $result = mysqli_query($conn,"SELECT * FROM client WHERE username='" . $_POST['username'] . "'");
// $row= mysqli_fetch_array($result);
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
				
				<table>	
				<tr>
<td class="vertical-menu">
  <a href="#" class="active">Account</a>
 <a href="sign_in_admin.php">Home&nbspPage</a>
  <a href="view_client_prof.php">View&nbspProfile</a>
 <a href="edit_client_prof.php">Edit&nbspProfile</a>
  <a href="client_reg_form.php">Add Seller</a>
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
	Name:<br>					
<input type="text" name="name"  value="<?php echo $user['name']; ?>">
<br>

Phone:<br>					
<input type="text" name="phone"  value="<?php echo $user['phone']; ?>">

Email:<br>					
<input type="text" name="email"  value="<?php echo $user['email']; ?>">

NID:<br>					
<input type="text" name="nid"  value="<?php echo $user['nid']; ?>">

<br>
Password:<br>
<input type="Password" name="password" class="txtField" value="<?php echo $user['password'];?>">

<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $user['gender'];?>">
<br>

Date Bith:<br>					
<input type="text" name="dob"  value="<?php echo $user['dob']; ?>">

     </tr>
     <tr>
     	<td>
						
							<input type="submit" name="update" value="Update">
					
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
