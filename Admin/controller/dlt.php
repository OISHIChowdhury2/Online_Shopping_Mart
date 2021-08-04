<?php
session_start();
$con=mysqli_connect('localhost','root','','project');

$id = $_GET['id']; 
echo $id;
$sql= "delete from seller where id ='{$id}'";
$result = mysqli_query($con,$sql);

if($result)
{
   header('location:../view/sing_in_admin.php');
}
else
{
    echo "Error deleting record"; 
}
?>