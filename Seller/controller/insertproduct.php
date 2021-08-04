
<?php
	session_start();
require_once('../model/selles.php');

	if(isset($_POST['insert']))
	{	
     
 $name=$_POST['name'];
$price=$_POST['price'];
$code=$_POST['code'];
$image=$_POST['image'];
$quantity=$_POST['quantity'];


		
  if ($name==""||$price == "" || $quantity == "") 
  {
  	echo "Null Submition";
  	
  } 
  else {
 

      $product=[
      	'name'=>$name,
      	'price'=>$price,
      	'code'=>$code,
      	'quantity'=>$quantity,
      	'image'=>$image
      ];

     $status=insertProduct($product);

				if($status)
				{
				header('location: ../view/seller.php');
          }
				// $status = insertUser($user);

				// if($status){
				// 	header('location: ../view/login.html');
				// }else{
				// 	echo "error";
				// }

			
				else{
				echo "quantity & confirm quantity mismatch..";
			}
		}
}


?>