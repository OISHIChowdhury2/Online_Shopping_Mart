<?php
session_start();
//require_once('../model/config.php');
$conn=mysqli_connect('localhost','root','','project');
if(count($_POST)>0) {

mysqli_query($conn,"UPDATE products set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', price='" . $_POST['price'] . "',code='" . $_POST['code'] . "', image='" . $_POST['image'] . "'quantity='" . $_POST['quantity'] . "'  WHERE id='" . $_POST['id'] . "'");

}
$result = mysqli_query($conn,"SELECT * FROM products WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Unite Online Shopping Mart</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<table class="table" border="2">
  <tr>

    
  <td>
       
<div class="navbar">
  <img src="../pic/unitlogo.jpeg" width="18%" align="left">

 
 
    </div>
  </div>

  
  </div>
  </td>
  </tr>


  <!-- serch -->
        <tr>
  <td > 
<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
  <a href="#">Link 4</a>
</div>
<div class="topnav">
    
<!-- profile -->
 
    
      <div class="search-container">
       

<input type="text" name="search" id="name" onkeyup="ajax()" />
  <button type="submit" value=""><i class="fa fa-search"></i></button>
  <div id="result">
        

       
      </div>
      </div>
      </div>
      
 <form  method="post" action="">
<div>
</div>
<div>
<a href="../view/seller.php">shoppingcart List</a>
</div>

ID: <br>

<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Product Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Price :<br>
<input type="text" name="price" class="txtField" value="<?php echo $row['price']; ?>">
<br>
Code<br>
<input type="text" name="code" class="txtField" value="<?php echo $row['code']; ?>">
<br>
image:<br>
<input type="file" name="image" class="txtField" value="<?php echo $row['image']; ?>">
<br>
Quantity<br>
<input type="text" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>">
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
