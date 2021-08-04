<?php

$dbuser = 'root';
$dbpass = '';
$host = 'localhost';
$dbname = 'project';

/*$con=mysqli_connect('localhost','root','','db');

if ($con==true) {
	echo"Database connected..!";
	# code...
}
else{

}*/
function getConnection(){
	global $dbname,$dbpass,$dbuser,$host;
	$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
	return $con;

}

?>