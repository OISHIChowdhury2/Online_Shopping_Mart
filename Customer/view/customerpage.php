
<?php
include('header.php');

include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}


if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
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
<form action="cart.php">
<button><i class="fa fa-shopping-cart"></i>Cart<span style="margin-top: 100%"><?php echo $cart_count; ?></span></button>
</form>
</td>
</tr>	

<tr>
	<td>
<?php
}

$result = mysqli_query($con,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='../img/".$row['image']."'height='300px' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

<a href="../../view/login.php">Sign_out</a>
<br /><br />
</div>
</td>
</tr>
</table>

<!-- 
	<td>
		<div class="card">
			<img src="../img/panjabi.jpeg"style="width:100%">
			<h1>Panjabi</h1>
			<p class="price">500</p>
			<span class="fa fa-star checked"></span>
       <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
		
		  </div>
	</td>

	</td>
</tr>

</table>
	  
	

<tr>
  <td>
	<table class="table"> 
		<tr>
		
			<td>
				<div class="card">
					<img src="../img/babydress.jpeg"style="width:100%">
					<h1>Baby Dress</h1>
					<p class="price">500</p>
					<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
				
				  </div>
			</td>
			<td>
				<div class="card">
					<img src="../img/baby.jpeg"style="width:100%">
					<h1>Baby Dress</h1>
					<p class="price">1000</p>
					<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
				
				  </div>
			</td>
			<td>
				<div class="card">
					<img src="../img/cat.jpeg"style="width:100%">
					<h1>Harness</h1>
					<p class="price">300</p>
					<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
				
				  </div>
			</td>
		
			<td>
				<div class="card">
					<img src="../img/shop3.jpeg"style="width:100%">
					<h1>Man Shoe</h1>
					<p class="price">4500</p>
					<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
				
				  </div>
			</td>
		
			</td>
		</tr>
		
		</table>
  </td>

</tr>







</td>
</tr>

<tr>
	<td>
	 -->




	</td>
	</tr>
	</table>
</td>
</tr>
</table>






	</td>
	</tr>
	</table>



<!-- massagebox -->
<!-- 	
<button class="open-button" onclick="openForm()">Messenger</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  
    <input type="area" maxlength="10" required>
    <input type="text" class="btn">
    <input type="submit" class="sent" value="Sent">
    
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div> -->

<!-- 	
<button class="open-button" onclick="openForm()">Messenger</button>
<div class="form-popup" id="myForm">
  <form class="form-container">
  <p id="demo"></p>
 <input id="id1" type="textarea" max="300">
  <button onclick="return myFunction()">Sent</button>
  
   <button  class="btn cancel" onclick="closeForm()">Close</button>

  </form>
</div>
 -->

<!-- feedback -->
<div id="feedback-main">
  <div id="feedback-div">
    <form action="../controller/home.php" method="post" class="form" id="feedback-form1" name="form1" enctype="multipart/form-data">

      <p class="name">
        <input name="name" type="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" required placeholder="Name" id="feedback-name" />
      </p>

      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Email"  />
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
 function myFunction() 
    {
  var inpObj = document.getElementById("id1");
  if (!inpObj.checkValidity()) {
    document.getElementById("demo").innerHTML = inpObj.validationMessage;
  } else 
  {
    document.getElementById("demo").innerHTML = "Thank you for your message";
  } 
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
