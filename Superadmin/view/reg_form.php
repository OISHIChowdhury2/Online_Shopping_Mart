<?php
  $title= "Home Page";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Public Home</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css"> 
</head>
<body> 
  <form method="POST" action="../controller/regCheck.php" onsubmit="return validation()">
  <table border="1" align="center">
    <tr>
      <td colspan="2">
             <img src="../pic/logo.png" height="60px" width="320px">

<table  align="right"  >
  <tr>
    <td>
      <label>Signed_in_as</label>
<!-- <a href="viewprof.php">
<?php 
 echo $_SESSION['username'];
 ?> -->
  </a>
</td>
<td>
</td>
</tr>
  <div>
  </div>
  
</td>

</td>
</tr>
  </table>

    <tr>
      <td>
        
        <table >  
        <tr>
          <td rowspan="3">
        
<td class="vertical-menu">
  <a href="#" class="active">Menu</a>
 <a href="sign_in_owner.php">Home&nbspPage</a>
  <a href="viewprof.php">View&nbspProfile</a>
  <a href="edit_prof.php">Edit Profile</a>
 <a href="reg_form.php">Add client</a>
  <a href="client_info.php">Client information</a>
  <a href="account.php">Account</a>
</div>
  
</td>
</tr>
</table>
      <td colspan="2"  height="190px" align="center">
        <table>
          <tr>
            <td>
              <form>
    <fieldset >
      <legend > <h3>Registration</h3></legend>
       
       <table>
        
            <tr>
            <td>Client Name :</td>
            <td><input type="text" name="name" id="name">
            </td>
                         </tr>
                         <tr>
            <td>Phone :</td>
            <td><input type="number" name="phone" id="mobileNumber">
            </td>
                         </tr>

                         <tr>
                          <td>E-mail :</td>
                          <td><input type="email" name="email" id="emails"></td>
                         </tr>
                         <tr>
            <td>NID (NUMBER) :</td>
            <td><input type="number" name="nid" id="nid">
            </td>
                         </tr>

                         <tr>
                          <td>User Name :</td>
                          <td><input type="text" name="username" id="user">
                          </td>
                         </tr>

                         <tr>
                          <td>Password :</td>
                          <td><input type="Password" name="pass" id="pass">
                          <span id="passwords" > </span>
                          </td>
                         </tr>
                         <tr>
                          <td>Confirm Password :</td>
                          <td><input type="Password" name="confpass" id=conpass></td>
                         </tr>
            <tr>
            <td>Shop Name :</td>
            <td><input type="text" name="sname" id="sname">
            </td>
                         </tr>
                        <tr>
                          <td> Shop Type :</td>

            <td>
          <select name="stype">
             <option value="" required="true">Baby Shop</option>
             <option selected value="">Sports Shop</option>
             <option value="">Electronic Shop</option>
             <option value="">Gents Shop</option>
             <option value="">Ladies Shop </option>
             <option value="">Groceries Shop</option>
             <option value="">Pets Shop</option>
             <option value="">Cosmetics Shop</option>
             <option value="">Others</option>
       </select> <br>
         </td>
       </tr>

                         <tr>
                           <td colspan="2">
                      <fieldset> <legend>Gender :</legend>
                        
                          <input type="radio" id="male" name="gender" value="male"><label>Male</label>
                          <br>
                            <input type="radio" id="female" name="gender" value="female"><label>Female</label>
                            <br>
                            <input type="radio" id="other" name="gender" value="other"><label>Other</label>


                        </fieldset>
                           
           <tr>
         <td colspan="2">
       <fieldset> <legend>Date Of Birth</legend>
           <input type="date" id="birthday" name="dob" id="dob">

                            </td>
                        </tr>
                         <tr>
                           <td colspan="2">
                      <fieldset> <legend>Profile picture :</legend>
                        
                        <input type="file" name="pic">
                          <tr>
                            <td>
                            <input type="submit" name="submit">
                            <input type="reset" name="reset">
                          </td>
                          </tr>


</td>
</tr>
                        </fieldset>

</table>
<script type="text/javascript">
    

    function validation(){

       var name = document.getElementById('name').value;
       var mobileNumber = document.getElementById('mobileNumber').value;
       var emails = document.getElementById('emails').value;
        var nid = document.getElementById('nid').value;
      var user = document.getElementById('user').value;
      var pass = document.getElementById('pass').value;
      var confirmpass = document.getElementById('conpass').value;


       if(name == ""){
        
         alert("Please fill the name field");
                    
                    return false;
      }
      if(!isNaN(name)){
        
         alert(" Input type character only");
                    
                    return false;
      }
      if(mobileNumber == ""){
        
         alert("Enter the Mobile Number");
                    
                    return false;
      }
      if(isNaN(mobileNumber)){
        
         alert("Input Type only Number");
                    
                    return false;
      }
      if(mobileNumber.length<11){
        
         alert("Mobile Number must be 11 digit");
                    
                    return false;
      }
      if(emails == ""){
      
         alert("Please enter the email");
                    
                    return false;
      }
      if(emails.indexOf('@') <= 0 ){
        
         alert("@ Invalid Position");
                    
                    return false;
      }
      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
        
         alert(". Invalid Position");
                    
                    return false;

      }
      if (nid =="") {
         alert("Please enter your nid number.");
                    
                    return false;
      }
       if((nid.length < 12)) {
         
         alert("Invalid nid");
                    
                    return false;
      }
      if(user == ""){
        
         alert("Please fill the username field");
                    
                    return false;
      }
      if((user.length <= 2) || (user.length > 20)) {
         
         alert("Username lenght must be Greater than 2 and less than 20 digit");
                    
                    return false;
      }
      if(!isNaN(user)){
        
         alert(" Input type character only");
                    
                    return false;
      }
      if(pass == ""){
        
         alert("Enter the Password first");
                    
                    return false;
      }
      if(pass.length < 8) {
         
         alert("Passwords lenght must be greater or equal 8 ");
                    
                    return false;
      }
      if(pass!=confirmpass){
        
         alert("Passwords Mismatch");
                    
                    return false;
      }
      if(confirmpass == ""){
       
        alert("Please enter the confirmpassword ");
        return false;
      }
     
    }

  </script>

</td>
</tr>


</td>
</tr> 
</table>
<br>

</td>
</tr>
 <tr>

  <td colspan="2" align="left" height="30px">
                <b>Contuct us :</b>
        <table align="right">
        <tr>
          <td>
          <a href="https://www.facebook.com/amin.rishat"> <img src="../pic/facebook1.png" height="30px" &nbsp> </a>
          </td>
          <td>
          <a href="https://mail.google.com/mail/u/1/#inbox"><img src="../pic/gmail.png"height="15px" &nbsp></a>
          </td>
          <td>
          <a href="https://twitter.com/RishatAmin"> <img src="../pic/twitter.png" height="20px"> </a>
          </td>
        </tr>


      </td>
    </tr>

</td>
</tr>
</table>


</body>
</html>