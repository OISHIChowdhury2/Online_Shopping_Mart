<?php
session_start();
require_once('../model/selles.php');

$conn=mysqli_connect('localhost','root','','project');
$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from products where id = '$id'");

if($del)
{
  
   header('location: ../view/seller.php'); 
}
else
{
    echo "Error deleting record"; 
}
?>

