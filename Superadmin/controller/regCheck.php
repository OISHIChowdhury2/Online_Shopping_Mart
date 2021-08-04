<?php
    session_start();
    require_once('../model/query.php');

 

    if(isset($_POST['submit'])){

 

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $nid = $_POST['nid'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $confpass = $_POST['confpass'];
        $sname = $_POST['sname'];
         $stype = $_POST['stype'];
        $gender = $_POST['gender'];

        $dob = $_POST['dob'];
       
        $pic = $_POST['pic'];

 

       /* if( $name ==""||$phone ==""||$email ==""|| $nid ==""||$username ==""||    $password ==""||$confpass ==""){
            echo "null submission...";
        }
        elseif(strlen($password) <8) {
            echo"Password is too short...";
        }

 

        elseif(strlen($phone) <11){
            echo"Phone number may be Incomplete...";
        }

        elseif($password != $confpass){
            echo "Password didn't mathed";
        }
 

       else {
*/
                $user = [    'name' =>$name,
                            'phone'=>$phone,
                            'email'=> $email,
                            'nid'=>$nid,
                            'username'=>$username, 
                            'password'=>$password, 
                            'confpass'=>$confpass, 
                            'sname'=> $sname,
                              'stype' =>$stype,
                              'gender'=>$gender,
                              'dob'=>$dob,
                                'pic'=>$pic
                        ];

                        $status=insertUser($user);
                        echo $status;
                        if($status){
                         

                            header('location:../view/sign_in_owner.php');
 

                        //$_SESSION['current_user'] = $user;

 
                        }
                        else{
                                echo "shomvob na";
                        }
                //echo "Registration Successful..!";
        }
   
      
    //}

 

?>