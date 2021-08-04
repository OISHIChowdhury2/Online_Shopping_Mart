<?php
include('header.php');

$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
  foreach($_SESSION["shopping_cart"] as $key => $value) {
    if($_POST["code"] == $key){
    unset($_SESSION["shopping_cart"][$key]);
    $status = "<div class='box' style='color:red;'>
    Product is removed from your cart!</div>";
    }
    if(empty($_SESSION["shopping_cart"]))
    unset($_SESSION["shopping_cart"]);
      }   
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
    
}
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
      <li><a  href="index.php">Home</a></li>
    <li><a href="#"> Customer Care</a>
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

<tr>
  <td>
  <table class="table">
<tr>
<td>
<div style="width:700px; margin:50 auto;">


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<i class="fa fa-shopping-cart"></i> Cart</a>
</div>
<?php
}
?>
<table border="1" width="150%" align="center">
  <tr>
    <td>
<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>  
<table class="table" >
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr> 
<?php   
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='../img/<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />



<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>



</form>
</td>
<td><?php echo $product["price"]; ?></td>
<td><?php echo $product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
  $total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="4">
<strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
</td>
<td>
  <!-- <input type="number" name="total_price" value="<?php echo "$".$total_price; ?>"> -->
</td>
<td>
<form action="../controller/payment.php" method="post"> 
<!-- <a href="../controller/payment.php?price=<?php echo $total_price; ?>"> -->

  <input type="hidden" value="<?php echo $total_price?>" name="total_price">

  <input type="submit" name="submit" value="CheckOut" class="btn">
</form>



</td>
</tr>
</tbody>
</table>    
  <?php
}else{
  echo "<h3>Your cart is empty!</h3>";
  }
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
<a href="customerpage.php">Back</a>


<br /><br />

</div>












<!-- massagebox -->
  
<button class="open-button" onclick="openForm()">Messenger</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  
    <input type="area" maxlength="10" required>
    <input type="text" class="btn">
    <input type="submit" class="sent" value="Sent">
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!-- feedback -->
<div id="feedback-main">
  <div id="feedback-div">
    <form action="contact.php" method="post" class="form" id="feedback-form1" name="form1" enctype="multipart/form-data">

      <p class="name">
        <input name="name" type="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" required placeholder="Name" id="feedback-name" />
      </p>

      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Email" required />
      </p>

      <p class="text">
        <textarea name="comment" type="comment" class="validate[required,length[6,300]] feedback-input" id="feedback-comment"></textarea>
      </p>

      <div class="feedback-submit">
        <input type="submit" value="SEND" id="feedback-button-blue" />
        <div class="feedback-ease"></div>
      </div>
    </form>
  </div>
</div>

<button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>

</div>

  <!-- Site footer -->
 <div align="center" >
  <?php
  include('footer.php')
  ?>

  </div>


  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


    function toggle_visibility() {
       var e = document.getElementById('feedback-main');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>

</body>
</html>
