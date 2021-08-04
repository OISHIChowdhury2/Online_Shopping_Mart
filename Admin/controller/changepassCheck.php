<?php
	session_start();

	if(isset($_POST['submit'])){

		$pass1 = $_POST['oldPassword'];
		$pass2 = $_POST['newpass'];
		$pass3 = $_POST['confpass'];


		if($pass1 == "" || $pass2 == ""|| $pass3 == "")
		{

			
			echo "Null Submission";
		}
	

		else
		{
			 //$user = $_SESSION['current_user'];

			if($pass1 == "123456" && $pass2 == $pass3 )
			{
				$_SESSION['flag'] = true;
				//header('location: ../view/sign_in_owner.php');

				echo "Password Changed!";
			}
			else
			{
				echo "Current Password or New Password Mismatch!";
			}
		}

	}
?>