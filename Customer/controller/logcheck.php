<?php

require_once('../model/reg-log.php');

  if(isset($_POST['submit']))
  {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
      echo "null submission...";
    }
    
    else{
      $status=validateUser($username,$password);

  if ($status)
   {

   session_start();
    $_SESSION['flag']=true;
  
    $_SESSION['username']=$username;
    $user=get_row($username);
    $_SESSION['id'] = $user['id'];

     header('location: ../view/customerpage.php');
    
  } 
      

       
    else{
        echo "invalid user";
      }
    }

  }
?>