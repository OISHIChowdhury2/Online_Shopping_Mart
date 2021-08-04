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

<table  align="right" width="50%">
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

</td>



</table>

      <td>
        <h1>Welcome Sir!</h1> <table align="right" width="50%"><table>
          <table border="1" align="center" width="500px">
   

  </td>
</tr>



<tr>

       <td align="center" colspan="3">

        <?php
  $con=mysqli_connect('localhost','root','','project');

       $sql='select * from client';
           $result=mysqli_query($con,$sql);
?>
          <table border="1" align="left" width="60%" >
      
               <tr>
               <td>ID</td>
               <td>Name</td>
               <td>Phone</td>
               <td>Email</td>
               <td>Nid</td>
               <td>User Name</td>
               <td>Password</td>
               <td>Shop Name</td>
               <td>Gender</td>
               <td>Date of Birth</td>
               <td>Profile Pic</td>
               </tr>";
 
<?php
     while($row=mysqli_fetch_assoc($result))
           {
            ?>
            <tr>
              
               <td><?php echo $row['id'];?></td>
               <td><?php echo"{$row['name']}"?></td>    
               <td><?php echo"{$row['phone']}"?></td>
               <td><?php echo"{$row['email']}"?></td>
                <td><?php echo"{$row['nid']}"?></td>
                 <td><?php echo"{$row['username']}"?></td>
               <td><?php echo"{$row['password']}"?></td>
                <td><?php echo"{$row['sname']}"?></td>
                 <td><?php echo"{$row['gender']}"?></td>
               <td><?php echo"{$row['dob']}"?></td>
                <td><?php echo"{$row['pic']}"?></td>
               
               <td>

               

               <a href="../controller/dlt.php?id=<?php echo $row['id'];?>">Delete</a>
              </td>

                <td>
                  <a href="../controller/edt.php?id=<?php echo $row['id'];?>">Edit</a></td>
               </tr>
         
      <?php  
       } echo "</table>";
         ?>
</form>
               
               </tr>
           </form>
      
      
    

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
