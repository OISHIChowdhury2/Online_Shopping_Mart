<?php
session_start();
$con=mysqli_connect('localhost','root','','project');

$id = $_GET['id']; 
echo $id;
$sql= "delete from client where id ='{$id}'";
$result = mysqli_query($con,$sql);

if($result)
{
   header('location:../view/client_info.php');
}
else
{
    echo "Error deleting record"; 
}
?>