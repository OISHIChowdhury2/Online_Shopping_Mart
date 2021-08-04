<?php
	session_start();

	if(isset($_POST['submit'])){

		$email = $_POST['email'];

		if($email == "")
		{

			
			echo "Null Submission";
		}

		
			else
			{
				echo "Recovery link has been sent to your Mail..";
			}
		}

?>