<?php
	$title= "Home Page";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body> 
	<table border="1" align="center">
		<tr>
			<td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">

<table  align="right"  >
	<tr>
		<td>
			<label>Signed_in_as</label>
<!-- <a href="viewprof.php">
<?php 
 echo $_SESSION['username'];
 ?> -->
	</a>
</td>
<td>
</td>
</tr>
	<div>
	</div>
	
</td>

</td>
</tr>
	</table>

		<tr>
			<td>
				
				<table >	
				<tr>
					<td rowspan="3">
				
<td class="vertical-menu">
  <a href="#" class="active">Menu</a>
 <a href="sign_in_owner.php">Home&nbspPage</a>
  <a href="viewprof.php">View&nbspProfile</a>
  <a href="edit_prof.php">Edit Profile</a>
 <a href="reg_form.php">Add client</a>
  <a href="client_info.php">Client information</a>
  <a href="account.php">Account</a>
</div>

	
</td>

</table>

			<td>
				<h1>Welcome Sir!</h1> <table align="right"><table>
					<table border="1" align="center" width="790px">

        <?php
  $con=mysqli_connect('localhost','root','','project');

       $sql='select * from ac';
           $result=mysqli_query($con,$sql);
?>
          <table border="1" width="30%" >
<tr>
	<td colspan="2"><h3 align="center">Total Sell</h3>
	</td>
</tr>
               <tr>

               	<td >ID</td>
                <td >Total Price</td>
               
               </tr>

 
<?php
      while($row=mysqli_fetch_assoc($result))
           { ?>
            <form  method="post">
              
            
            <tr>
                 <td ><?php echo "{$row['id']}";?></td>
                <td><?php echo "{$row['total_price']}";?></td>
               <!--  <?php echo "{$row['total_price']}";?></td> -->
              </td>
</form>
            </tr>
          
       <?php  
   }
   ?>

       </td>

</table>
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
