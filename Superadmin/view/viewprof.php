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
  <table border="1" align="center">
    <tr>
      <td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">

<table  align="right" width="50%">
  <tr>
    <td>
      
<label>Signed_in_as</label>
<a href="viewprof.php">
<?php 
 echo $_SESSION['username'];
 ?>
	</a>
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
</td>
</tr>
      </td>
    </tr>
</p>
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


</table>

		
			<td>
				<b>Welcome Sir!</b> <table align="right"><table>
					<table border="1" align="center" width="790px">
						<tr>
							
<td>
	<fieldset>
		<legend>View Profile</legend>

	
<table  width="50%" align="center">
	<tr>
		<td>
        <?php
	$con=mysqli_connect('localhost','root','','db');

 


           $sql='select * from owner';
           $result=mysqli_query($con,$sql);
 

      while($row=mysqli_fetch_assoc($result))
           {
            echo 
            "<tr>
               <td >Name</td>
               <td >{$row['name']}</td>
               </tr>
               <tr>
               <td >User Name</td>
               <td >{$row['username']}</td>
               </tr>
               <tr>
               <td>Email</td>
               <td>{$row['email']}</td>
               </tr>
               <tr>
               <td>Password</td>
               <td>{$row['password']}</td>
               </tr>
               <tr>
               <td>Phone</td>
               <td>{$row['phone']}</td>
                
                </tr>

               </tr>";
          
         }

 

         echo "</table>";
         ?>
         </td>
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
