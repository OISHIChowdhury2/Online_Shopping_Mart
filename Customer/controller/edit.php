<?php
session_start();


$conn=mysqli_connect('localhost','root','','project');

  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_row($username);

if(count($_POST)>0) {

mysqli_query($conn,"UPDATE client set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', username='" . $_POST['username'] ."',phone='" . $_POST['phone'] . "',email='" . $_POST['email'] ."',password='". $_POST['password'] ."', address='" . $_POST['address'] ."',gender='" . $_POST['gender'] . "'  WHERE id='" . $_GET['id'] . "'");


}
$result = mysqli_query($conn,"SELECT * FROM client WHERE username='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

 <link rel="stylesheet" type="text/css" href="../css/styles.css">  
 <link rel="stylesheet" type="text/css" href="../css/style.css">  


 

</head>
<body>

<table class="table">
  <tr>
    <td>
    <img src="../pic/unitlogo.jpeg" width="19%" align="left">
    <div></div>

    <ul>
      <li >
        <a  href="index.php">Home</a></li>
   
     <li ><a href="#"> Track My Order   </a>
    </li>
    <li ><a href="#"> Customer Care</a>
    </li>
    <li><a href="profile.php" >   
  <?php echo $_SESSION['username'];?> 
    </a>
</li>
</ul>
</td>
</tr>
<tr>
  <td>
 <div class="topnav">
     <div class="search-container">
    <form >
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
  </form>
      
</td>
</tr>


  <table class="table">
<tr>



  <td>
  
  <table border="1" width="100%">
<tr>
<td align="right">
  <div class="topnav">
     <div class="search-container">

</td>
</tr> 

<tr>
  <td>
      </div>
      
 <form  method="post" action="">
<div>
</div>
<div>

</div>

Name: <br>

<input type="text" name="name"  value="<?php echo $user['name']; ?>">
<br>
UserName: <br>
<input type="text" name="username" class="txtField" value="<?php echo $user['username']; ?>">
<br>
Phone :<br>
<input type="text" name="phone" class="txtField" value="<?php echo $user['phone']; ?>">
<br>
Email<br>
<input type="text" name="email" class="txtField" value="<?php echo $user['email']; ?>">
<br>
Password:<br>
<input type="Password" name="Password" class="txtField" value="<?php echo $user['password'];?>">
<br>

Address<br>
<input type="text" name="address" class="txtField" value="<?php echo $user['address']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $user['gender'];?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</form>
 
 
 
  </td>
    </tr>

</table>


<!-- massagebox -->
  

  <!-- Site footer -->
 <div align="center" >
  <?php
  include('../view/footer.php')
  ?>

  </div>

</body>
</html>
