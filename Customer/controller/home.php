

<?php
  session_start();
require_once('../model/care.php');

  if(isset($_POST['submit']))
  { 
   $name=$_POST['name'];
   $comment=$_POST['comment'];
   $email=$_POST['email'];
    

/*  if($password == $repass)
  {*/

      $user=[
        'name'=>$name,
        'comment'=>$comment,
        'email'=>$email,
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