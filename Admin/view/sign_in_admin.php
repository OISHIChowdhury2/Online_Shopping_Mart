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
					

<td class="vertical-menu">
  <a href="#" class="active">Account</a>
 <a href="sign_in_admin.php">Home&nbspPage</a>
  <a href="view_client_prof.php">View&nbspProfile</a>
 <a href="edit_client_prof.php">Edit&nbspProfile</a>
  <a href="client_reg_form.php">Add Seller</a>
 
</div>

				<!-- <ul>	

	<li></li>
	<li></li>
	<li>li>
	<li></li>
	<li>li>
	<li></li>
</ul> -->
</td>



</table>

			<td>
				<h1>Welcome Sir!</h1> <table align="right"><table>
					<table border="1" align="center" width="790px">
						
 <!-- <table  width="20%" align="center">
  <form  action="../controller/insertproduct.php" method="POST" >
            <table > 
              <tr>
                <td>
             Product_Name</td><td><input type="text" name ="name"></td>
             <td><p id="msg"></p></td>
</tr>
<tr>
  <td>

              Price</td><td><input type="text" name ="price"></td>
             <td> <p id="msg"></p>
              </td>
</tr>
<tr>
  <td>

              Code</td>
              <td><input type="text" name ="code"></td>
             <td> <p id="msg"></p>
              </td>
</tr>

<tr>
  <td>
      
              Quantity</td><td><input type="number" name="quantity" id="quen"></td>
              <td>
               <p id="msg"></p></td>
             </tr>
               <tr>
  <td>
      

             Image Upload</td>
             <td> <input type="file" name ="image" id="pic"></td>
             <td>
              <p id="msg"></p>
             </td>
</tr>
<tr>
  <td colspan="2" >
          
            <input class="nav" type="submit" name="insert" value="Insert">
      
          </td>
        </tr>
      
           </form>
         </td>
       </tr>
     </table>

</table> -->

  </td>
</tr>



    <td align="center" colspan="3">
    	<h3>Seller Information</h3>
        <?php
  $con=mysqli_connect('localhost','root','','project');

       $sql='select * from seller';
           $result=mysqli_query($con,$sql);
?>
          <table border="1" align="center" width="60%" >
               <tr>
                <td >Name</td>
               <td >Phone</td>
               <td >Email</td>
               <td >NID</td>
               <td >User Name</td>
                <td>Password</td>
                <td>Gender</td>
               <td>Date of Birth</td>
               <td >Image</td>
               <td >Type</td>
               <td >Salary</td>
               <td colspan="2">Action</td>
               </tr>

 
<?php
      while($row=mysqli_fetch_assoc($result))
           { 
           	?>
            <form  method="post">
              
            
            <tr>
                 <td ><?php echo "{$row['name']}";?></td>
                <td ><?php echo "{$row['phone']}";?></td>
                <td ><?php echo "{$row['email']}";?></td>
                <td ><?php echo "{$row['nid']}";?></td>
                <td ><?php echo "{$row['username']}";?></td>
                <td><?php echo "{$row['password']}";?></td>
                <td><?php echo "{$row['gender']}";?></td>
               	<td><?php echo "{$row['dob']}";?></td>
               	<td ><?php echo "{$row['pic']}";?></td>
               	<td><?php echo "{$row['type']}";?></td>
               	<td><?php echo "{$row['salary']}";?></td>
               	
                 <td>
                  <button> <a href="../controller/dlt.php?id=<?php echo $row['id']; ?>">Delete</a></td></button></td>
                 <td><button><a href="../controller/edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
                
                 <!-- <button name="del">Delete</button> -->
              </td>
                <!-- <td><input type="submit" name="delete" value="Delete"> -->
 
</form>
               
               </tr>
          
       <?php  }
       ?>
               
 
            </td>
          </div>
      </form>
</table>
</td>







<tr>

       <td align="center" colspan="3">
       	<h3 align="left">Customer Information</h3>
        <?php
  $con=mysqli_connect('localhost','root','','project');

       $sql='select * from conf';
           $result=mysqli_query($con,$sql);
?>
          <table border="1" align="left" width="60%" >
               <tr>
               	<td >ID</td>
                <td >Name</td>
               <td >Phone</td>
               <td >Email</td>
               <td >Address</td>
               <td colspan="2">Action</td>
               </tr>

 
<?php
      while($row=mysqli_fetch_assoc($result))
           { ?>
            <form  method="post">
              
            
            <tr>
                 <td ><?php echo "{$row['id']}";?></td>
                <td ><?php echo "{$row['name']}";?></td>
                <td ><?php echo "{$row['phone']}";?></td>
                <td ><?php echo "{$row['email']}";?></td>
                <td ><?php echo "{$row['address']}";?></td>
                  </td>
               	
                 <td>
                  <button> <a href="../controller/dlt.php?id=<?php echo $row['id']; ?>">Delete</a></td></button></td>
                 <td><button><a href="../controller/edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
                
                 <!-- <button name="del">Delete</button> -->
              </td>
                <!-- <td><input type="submit" name="delete" value="Delete"> -->
 
</form>
               
               </tr>
           </form>
       
          
       <?php  }?>
             
      
       	
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
                <td ><?php echo "{$row['total_price']}";?></td>
                 
                
               
              </td>
                
 
</form>
               
               </tr>
          
       <?php  }?>
                 
  </table>
</td>
<tr>
	<td>

		

</table>
         <tr>
			<td colspan="2" height="30px">
				Since 2021	
				<table align="right">
					<td>
			
			<a href="../../view/login.php">Sign_out</a>
			</td>

				
		</tr>
		


	</table>

</body>
</html>
