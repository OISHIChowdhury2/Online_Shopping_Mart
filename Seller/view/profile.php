<?php
  $title= "Home Page";

//require_once('../model/config.php');

  session_start();
  require_once('../model/reg.php');
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_row($username);
  echo"$id";

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Unite Online Shopping Mart</title>
  <link rel="stylesheet" type="text/css" href="../css/selles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../javascrip/script.js"></script>

<style type="text/css">
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>

</head>
<body>

<table class="table" border="2">
  <tr>
  <td>

  <img src="../pic/unitlogo.jpeg" width="18%" align="left">

        </td>
     <tr>
        <td>
<div >
  <ul>
    <li>
  <a href="profile.php">Profile</a></li>
 <li> <a href="#">Account</a></li>
   <li><a href="#">Customer Question</a>
   </li>
 </ul>
</div>

  
    </td>
  </tr>
  <tr>
    <td>
<table border="1" align="right" width="40%">
  <tr>
    
</td>
</tr>
</table>
<table  width="20%" align="center">
  <form  action="" method="POST" >
           
    <legend>View Profile</legend>
            
 <table align="center"  id="table" width="50%" align="center">
   <tr id="tr">
         <td id="td">Seller Name:</td>
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
          <td  id="td">Salary</td>
            <td  id="td">
              <p><?php echo $user['salary']?></p> </td>
          </tr>

        <tr id="tr">
           <td colspan="2" style="width: 40%;"align="right" ><button style="background-color: rgb(0,0,0,1); width: 50%;"><a href="edit_client_prof.php?id=<?php  $id=$_SESSION['id']; ?>">Edit</a></button>
        </td>
      </tr>

 </table>
  </td>
    </tr>
  
            
            

</fieldset>
</form>
<tr>
  <td align="right">
<a href="../controller/logout.php">Logout</a>
</td>
</tr>
</table>

</td>
</tr></table>
</td>
</tr>
</table>
  <!-- Site footer -->
  
  <div align="center" >
  <?php
  include('footer.php')
  ?>

</body>
</html>
