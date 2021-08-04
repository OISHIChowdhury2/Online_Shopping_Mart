<?php
  require_once('db.php');
  function insertUser($user)
  {
  	$con=getConnection();
  	$sql = "INSERT INTO client values ('','{$user['name']}','{$user['phone']}','{$user['email']}','{$user['nid']}','{$user['username']}','{$user['password']}','{$user['sname']}','{$user['gender']}','{$user['dob']}','{$user['pic']}')";

  	return mysqli_query($con, $sql);
  }

  function validateUser($username, $password)
{
$con= getConnection();
  $sql="select * from owner where username='{$username}' and password='{$password}'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

  if (count($row)>0) {

 
  return true; 
  } 
  else{
    return false;
 } 
}

function get_id($username){
  $con= getConnection();
    $sql = "SELECT * FROM owner WHERE username='{$username}'";
    $result = mysqli_query($con,$sql);
    return mysqli_fetch_assoc($result);
}

/*function updateUser($user){

		$con = getConnection();
		$sql = "update owner set name='{$user['name']}',username='{$user['username']}',email='{$user['email']}',password='{$user['password']}',phone='{$user['phone']}'";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}*/



?>