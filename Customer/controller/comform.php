
<?php
  session_start();
require_once('../model/comformcheck.php');

  if(isset($_POST['submit']))
  { 

   $name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pay=$_POST['pay'];

/*  if($password == $repass)
  {*/

      $user=[
        'name'=>$name,
        'phone'=>$phone,
        'email'=>$email,
        'address'=>$address,
        'pay'=>$pay,
      ];

     $status=insertUser($user);

        if($status)
        {
        header('location: ../view/customerpage.php');
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