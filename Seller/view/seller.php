

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
    <td>
      <div class="topnav">
      <div class="search-container">
        <input type="text" name="search" id="name" onkeyup="ajax()" />
  <button type="submit" value=""><i class="fa fa-search"></i></button>
  <div id="result">
  </div>
</div>
</td>
</tr>
</table>
<table border="1" align="center" width="60%">
<tr>
  <td>
<table  width="20%" align="center">
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
             <td colspan="2"> <input type="file" name ="image" id="pic"></td>
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

</table>

  </td>
</tr>







  <tr>
    <td align="center">
        <?php
  $conn=mysqli_connect('localhost','root','','project');

       $sql='select * from products';
           $result=mysqli_query($conn,$sql);
?>
          <table border="1" align="center" width="60%" >
               <tr>
               <td>ID</td>
               <td>Name</td>
               <td>Code</td>
               <td>Price</td>
               
               <td >Image
                <td>Quantity</td>
               </td>
               </tr>

 
<?php
      while($row=mysqli_fetch_assoc($result))
           { ?>
            <form  method="post">
              
            
            <tr>
               <td><?php echo $row['id'];?></td>
               <td><?php echo"{$row['name']}"?></td>    
               <td><?php echo"{$row['code']}"?></td>
                <td><?php echo"{$row['price']}"?></td>
               <td><?php echo"{$row['image']}"?></td>
                 <td><?php echo"{$row['quantity']}"?></td>
                 <td>
                  <button> <a href="../controller/dp-del.php?id=<?php echo $row['id']; ?>">Delete</a></td></button></td>
                 <td><button><a href="../controller/edit.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
                
                 <!-- <button name="del">Delete</button> -->
              </td>
                <!-- <td><input type="submit" name="delete" value="Delete"> -->
 
</form>
               
               </tr>
          
       <?php  }?>
               
 
            </td>
          </div>

                <!--  <td><a href='../controller/insertproduct.php'>ADD</a></td>

                <td><a href='../controller/edited.php'>Edit</a></td>

                <td><a href='../controller/deletecheck.php?id=$row[id]'>Delete</a></td> -->

               
               
               </tr>  


         </table>
        

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
