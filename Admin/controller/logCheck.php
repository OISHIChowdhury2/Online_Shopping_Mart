<?php
	session_start();
	require_once('../model/query.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "" || $password == "")
		{

			
			echo "Null Submission";
		}
	

		else
		{
			// $user = $_SESSION['current_user'];

			/*if($username == "rishat" && $password == "123456" )
			{
				$_SESSION['flag'] = true;
				header('location: ../view/sign_in_owner.php');
*/

    
      $status=validateUser($username,$password);
 
  if ($status) {
 
   session_start();
    $_SESSION['flag']=true;
    $_SESSION["id"] = $row['id'];
    $_SESSION['username']=$username;
    //$_SESSION['password']=$password;
     header('location: ../view/sign_in_owner.php');

     if(!empty($_POST['remember'])){
					setcookie('username', $username, time()+(5000));
					setcookie('password', $password, time()+(5000));
				}else{
					if(isset($_COOKIE['username'])){
						setcookie('username','');
					}
					if(isset($_COOKIE['password'])){
						setcookie('password','');
					}
				}
			}
			else
			{
				echo "Log in again Please ";
			}
   
  } 
      
 
       
  /*  else{
        echo "invalid user";
      }*/
    }
 




			/*	if(!empty($_POST['remember'])){
					setcookie('username', $username, time()+(50000 ));
					setcookie('password', $password, time()+(50000 ));
				}else{
					if(isset($_COOKIE['username'])){
						setcookie('username','');
					}
					if(isset($_COOKIE['password'])){
						setcookie('password','');
					}
				}*/
			/*}
			else
			{
				echo "Username or Password is Incorrect!";
			}
		}

	}*/
?>