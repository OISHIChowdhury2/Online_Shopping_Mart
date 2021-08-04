<?php
session_start();

require_once('../model/account.php');

$conn=mysqli_connect('localhost','root','','project');


if(isset($_POST['total_price'])){
	$price = $_POST['total_price'];
	$del = mysqli_query($conn,"INSERT INTO ac(total_price) values ('$price')");
	
	if($del== true){
		header('location: ../view/payment_method.php'); 
	}
	else{
    	echo "Error deleting record"; 
	}	
}








  





?>

