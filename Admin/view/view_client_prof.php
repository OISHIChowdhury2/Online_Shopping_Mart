<?php
	$title= "Home Page";

//require_once('../model/config.php');

	session_start();
  require_once('../model/query.php');
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_id($username);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 

</head>
<body>
	<form method="post" action="edit_client_prof.php"> 
	<table border="1" align="center" width="60%">
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
</div>
	
	
</td>
</tr>


</table>

		
			<td>
				<b>Welcome Sir!</b> <table align="right"><table>
					<table border="1" align="center" width="790px">
						<tr>
							
<td>
	<fieldset>
		<legend>View Profile</legend>
            
 <table align="center" id="table" width="50%" align="center">
   <tr id="tr">
         <td id="td"> Name:</td>
         <td id="td"><p><?php echo $user['name']?></p></td> 
          </tr >
          <tr id="tr">
          <td  id="td">Phone:</td>
         <td  id="td"><p><?php echo $user['phone']?></p></td> 
          </tr>
          <tr id="tr">
          <td  id="td"> Email:</td>
         <td  id="td"><p><?php echo $user['email']?></p></td> 
          </tr>
          <tr id="tr">
          <td  id="td"> NID:</td>
         <td  id="td"><p><?php echo $user['nid']?></p></td> 
          </tr>
          <tr id="tr">
        
          <td  id="td">UserName:</td>
      <td  id="td"><p><?php echo $user['username']?></p> </td>
          </tr>
        <tr id="tr">
          <td  id="td">Password:</td>
            <td  id="td">
              <p><?php echo $user['password']?></p> </td>
          </tr>

       <tr id="tr">
          <td  id="td">Shop Name</td>
            <td  id="td">
              <p><?php echo $user['sname']?></p> </td>
          </tr>

          <tr id="tr">
          <td id="td">Gender:</td>
            <td  id="td">
              <p><?php echo $user['gender']?></p> </td>
          </tr>


       <tr id="tr">
          <td  id="td">Date Bith:</td>
            <td td id="td"><p><?php echo $user['dob']?></p></td>
         </tr>
         <tr id="tr">
          <td id="td">Image:</td>
            <td id="td">
              <p><?php echo $user['pic']?></p> </td>
          </tr>

        <tr id="tr">
           <td colspan="2" style="width: 40%;"align="right"><button><a href="edit_client_prof.php?id=<?php  $id=$_SESSION['id']; ?>">Edit</a></button>
        </td>
      </tr>

 </table>
  </td>
    </tr>

  </tr>
</table>
	</fieldset>



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

