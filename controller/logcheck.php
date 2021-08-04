<?php

require_once('../model/reg-log.php');

  if(isset($_POST['submit']))
  {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "rishat" || $password == "123456"){
      session_start();
    $_SESSION['flag']=true;
  
    $_SESSION['username']=$username;
    $user=get_row($username);
    $_SESSION['id'] = $user['id'];

     header('location: ../Superadmin/view/sign_in_owner.php');
    }
    elseif ($username == " " || $password == " ") {
      echo "Null Submition";
      # code...
    }
    
    else{

      if(substr($username, 0, 4)=='add-'){
        $user = substr($username, 4);
        $status= validateAdmin($user,$password);

        if ($status){

          session_start();
          $_SESSION['flag']=true;
    
          $_SESSION['username']=$user;
          $user=get_id($user);
          $_SESSION['id'] = $user['id'];

          header('location: ../Admin/view/sign_in_admin.php');      
        }         
      }
      elseif(substr($username, 0, 4)=='sel-'){
        $user = substr($username, 4);
        $status= validateSeller($user,$password);

        if ($status){

          session_start();
          $_SESSION['flag']=true;
    
          $_SESSION['username']=$user;
          $user=get_id($user);
          $_SESSION['id'] = $user['id'];

          header('location: ../Seller/view/seller.php');      
        }         
      }
      elseif($username!='' && $password!=''){
        $status= validateUser($username,$password);

        if ($status){

          session_start();
          $_SESSION['flag']=true;
    
          $_SESSION['username']=$username;
          $user=get_row($username);
          $_SESSION['id'] = $user['id'];

          header('location: ../Customer/view/customerpage.php');      
        }         
      }

      else{
        echo "invalid user";
      }
    }

  }
?>