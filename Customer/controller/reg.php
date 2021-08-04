

<?php
  session_start();
require_once('../model/reg-log.php');

  if(isset($_POST['signup']))
  { 
   $name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$repass=$_POST['repass'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];


    

/*  if($password == $repass)
  {*/

      $user=[
        'name'=>$name,
        'username'=>$username,
        'phone'=>$phone,
        'email'=>$email,
        'password'=>$password,
        'address'=>$address,
        'gender'=>$gender
      ];

     $status=insertUser($user);

        if($status)
        {
        header('location: ../view/login.php');
}
        // $status = insertUser($user);

        // if($status){
        //  header('location: ../view/login.html');
        // }else{
        //  echo "error";
        // }

      
       /* else{
        echo "password & confirm password mismatch..";
      }
    }*/
}
  
?>