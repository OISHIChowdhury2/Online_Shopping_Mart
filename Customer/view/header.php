<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>