<?php
  $title= "Create Page";
  include('header.php');
//require_once('../model/config.php');
  require_once('../model/reg-log.php');
  //session_start();
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_row($username);

?>

<!DOCTYPE html>
<html>
<head>
 <title>Online United Mart</title>


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
    <li ><a href="#"> Customer Care</a>
    </li>
    <li>  <a   href="profile.php" >   
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
</div>
</div>
<tr>
  <td>

	</td>
		</tr>
  <tr>
  	<td>
  		<div class="row">
 
    <div class="container">
      <form  action="../controller/comform.php" method="POST">
      <div class="row">
            <h3>Billing Address</h3>
            <br>
            <table >
            	<tr>
     <td>Name:</td>
      <td><p><?php echo $user['name']?></p> 
      <input type="hidden" name="name" value="<?php echo $user['name']?>">
      </td>
          </tr>
        <tr>
         <td>Phone:<td>
          <p><?php echo $user['phone']?></p>
          <input type="hidden" name="phone" value="<?php echo $user['phone']?>"> </td>
          </tr>
        <tr>
          <td>Email:</td>
            <td><p><?php echo $user['email']?>
              <input type="hidden" name="email" value="<?php echo $user['email']?>">
            </p> </td>
          </tr>
        <tr>
          <td>Password:</td>
            <td>
              <p><?php echo $user['password']?></p>
            <input type="hidden" name="password" value="<?php echo $user['password']?>"> </td>
          </tr>
        <tr>
          <td>Address:</td>
            <td><p><?php echo $user['address']?></p>
              <input type="hidden" name="address" value="<?php echo $user['address']?>"></p></td>
         </tr>
         </td>

         <tr>
          <td>

             
  <input type="checkbox" id="cash_on_delivery" name="pay" >
  <label >Cash On Delivery</label></td>
<td>
  <input type="checkbox" id="bikash" name="pay" >
  <label > Bikash</label><br>

</td>
</tr>
         <tr>
          <td align="right">
            <hr>
        <input  type="submit" name="submit" value="Continue to checkout" class="btn" style="background-color:#EEABF0; width: 150%;  height: 50%; ">
      </form>

      </td>
    </tr>
 <td>
         
  </div> 
 </td>
</tr>
</table>
</div>
</form>
</div>
</div>
<tr>
  <td>


  <!-- Site footer -->
 <div align="center" >
  <?php
  include('footer.php')
  ?>

  </div>


</body>
</html>
