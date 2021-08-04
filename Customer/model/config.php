<?php

	$dbuser = 'root';
	$dbpass = '';
	$host 	= 'localhost';
	$dbname	= 'project';


function getConnection(){

  global $dbname,$dbpass,$dbuser,$host;
$conn=mysqli_connect($host,$dbuser,$dbpass,$dbname);
return $conn;
}

  

// // 
// $sql='slect * from users';
//            $result=mysqli_query($conn,$sql);
//            //$row=mysqli_fetch_assoc($result);
//            print_r($result);

	// function getConnection(){

	// 	global $dbname, $dbpass, $dbuser, $host;
	// 	$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	// 	return $conn;
	// }

?>