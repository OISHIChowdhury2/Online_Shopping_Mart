 
<?php
	
	require_once('config.php');
   
   function insertUser($user)
   {

		$conn = getConnection();
   $sql = "INSERT INTO care values ('','{$user['name']}','{$user['comment']}','{$user['email']}')";
		if(mysqli_query($conn, $sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}




	

function validateUser($username, $password){
$conn= getConnection();
  $sql="select * from user where username='{$username}' and password='{$password}'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

  if (count($row)>0) {

 
  return true; 
  } 
  else{
  	return false;
 } 
}

// 	function getUserById($id)
// 	{
// 		$conn = getConnection();

// 		$sql="SELECT * FROM user WHERE id='$id'";
// 		$result=mysqli_query($conn,$sql);
//    while($row = mysqli_fetch_assoc($result)){
     
//      $id=$row['id'];
//      $name= $row['name'];
//      $username=$row['username'];
//      $phone=$row['phone'];
//     $email = $row['email'];
//     $password=$row['password'];
//       $address=$row['address'];
//       $gender=$row['gender'];
  
// 	}
// }


function get_row($username){
	$conn= getConnection();
    $sql = "SELECT * FROM user WHERE username='{$username}'";
    $result = mysqli_query($conn,$sql);
    return mysqli_fetch_assoc($result);
}

          
		//return $row;
	





  	




	// function updateUser($user){

	// 	$conn = getConnection();
	// 	$sql = "update tbuser set name='{$user['name']}',username='{$user['username']}',phone='{$user['phone']}',email='{$user['email']}',password='{$user['password']}',address='{$user['address']}',gender='{$user['gender']}' where id='id'";
		
	// 	if(mysqli_query($conn, $sql)){
	// 		return true;
	// 	}else{
	// 		return false;
	// 	}
	// }

// 	function e($val){
// 	global $db;
// 	return mysqli_real_escape_string($db, trim($val));
// }

// 	function getAllUser(){
// 		$conn = getConnection();
// 		$sql = "select * from tbuser";
// 		$result = mysqli_query($conn, $sql);
// 		$user =[];

// 		while($row = mysqli_fetch_assoc($result)){
// 			array_push($user, $row); 
// 		}

// 		return $user;
// 	}

	


// 	

?>