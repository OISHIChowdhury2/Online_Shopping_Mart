<?php
	
	require_once('config.php');
   
   function insertProduct($product)
   {

	$conn = getConnection();
   $sql = "INSERT INTO products values ('','{$product['name']}','{$product['code']}','{$product['price']}','{$product['image']}','{$product['quantity']}')";

		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else{
			return false;
		}
	}

// function deleteProduct($id){
// 		$conn = getConnection();
// 		$sql = "delete from shoppingcart where id = '$id'";
// 		if(mysqli_query($conn, $sql))
// 		{
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}


// 	function updateProduct($product,$id){

// 		$conn = getConnection();
// 		$sql = "update shoppingcart set name='{$product['name']}',price'{$product['price']}',quantity='{$product['quantity']}',image='{$product['image']}' where id={$id}";
		
// 		if(mysqli_query($conn, $sql)){
// 			return true;
// 		}else{
// 			return false;
// 		}
// 	}







	// function getAllProduct(){
	// 	$conn = getConnection();
	// 	$sql = "select * from shoppingcart";
	// 	$result = mysqli_query($conn, $sql);
	// 	$users =[];

	// 	while($row = mysqli_fetch_assoc($result)){
	// 		array_push($users, $row); 
	// 	}

	// 	return $users;
	// }







	?>