<?php
	$title= "Home Page";
	include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
	 <link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body>
	<form method="post" action="loginCheck.php"> 
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
	
<?php
	$con=mysqli_connect('localhost','root','','project');
           $sql='select * from owner';
           $result=mysqli_query($con,$sql);


          echo "<table>
               <tr>
               
              
                
               
                
               </tr>";

 



      while($row=mysqli_fetch_assoc($result))
           {
            echo 
            "<tr>
               
               <td >Name:</td>
               <td >{$row['name']}</td>
               </tr>
               <tr>
                <td >Username:</td>
               <td >{$row['username']}</td>
               </td>
               <tr>
               <td >Email:</td>
               <td>{$row['email']}</td>
               </tr>
               <tr>
                <td >Password:</td>
               <td >{$row['password']}</td>
               </tr>
               <tr>
               <td >Phone:</td>
               <td >{$row['phone']}</td>
               
               </tr>";
          
         }

 

         echo "</table>";
         ?>





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
