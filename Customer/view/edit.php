<?php
require_once('../model/config.php');
  $title= "Create Page";
  include('header.php');

?>


<!DOCTYPE html>
<html>
<head>
  <title>Online United Mart</title>
  <meta charset="utf-8">
  <title>Unite Online Shopping Mart</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../javascrip/script.js"></script>


</head>
<body>

<table class="table" border="2">
  <tr>

    
  <td>
       
    
  
<div class="navbar">
  <img src="../pic/unitlogo.jpeg" width="18%" align="left">

  <div class="track">
  <button class="trackbtn">Track My Order   
  </button>
    <div class="track-content">
      <form action="">
      <label class="text"> <b>Track Order </b>   </label>
      <br>
            <label class="text"><b>Enter your Email</b></label>
              <br>
             <input type="email" name="email">
      <br>
      <br>
      <label class="text">Enter the Order Code</label>
      <br>
      <input type="number" placeholder="6584....." name="code">
           <br>
       <br>
      <input type="submit" name="submit">
      </form>
    
    </div>
  </div>

  <div class="dropright">
    <button class="dropbtn">Customer Care
    </button>
    <div class="dropright-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    </div>
  </div> 
  </div>
  </td>
  </tr>


  <!-- serch -->
        <tr>
  <td > 
<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
</div>
<div class="topnav">
    
<!-- profile -->
  <div class="drop">
    
  <label class="dropbn"> 
  
    <a   href="login.php" ><i class="fa fa-users" aria-hidden="true"></i> My Profile</a>

  </label>
  
  </div> 
    
      <div class="search-container">
       

<input type="text" name="search" id="name" onkeyup="ajax()" />
  <button type="submit" value=""><i class="fa fa-search"></i></button>
  <div id="result">
        

       
      </div>
      </div>
      </div>
      
 <table align="center" border="1">
   <tr>
    <td>
      <form action="edited.php"> 
        <fieldset>

  
          <input type="text" name ="name"  id="user">
              
              <input type="text"  name ="username">
           

              <input type="number"  name ="phone" id="mobileNumber">
             
      
              <input type="email"name="email" id="emails">
                
              <input type="password"  name ="password" >
              
              <input type="password" name ="repass"  >
             
             
              <input type="area" class="input-field">
               
               <input type="text" class="form-control" name="gender">

                   <input type="submit" name="submit" >

        </fieldset>
      </form>
 </table>
  </td>
    </tr>

</table>


<!-- massagebox -->
  
<button class="open-button" onclick="openForm()">Messenger</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  
    <input type="area" maxlength="10" required>
    <input type="text" class="btn">
    <input type="submit" class="sent" value="Sent">
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<!-- feedback -->
<div id="feedback-main">
  <div id="feedback-div">
    <form action="contact.php" method="post" class="form" id="feedback-form1" name="form1" enctype="multipart/form-data">

      <p class="name">
        <input name="name" type="name" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" required placeholder="Name" id="feedback-name" />
      </p>

      <p class="email">
        <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="feedback-email" placeholder="Email" required />
      </p>

      <p class="text">
        <textarea name="comment" type="comment" class="validate[required,length[6,300]] feedback-input" id="feedback-comment" required placeholder="Hey, I really love the site but I believe that you could incorporate some ..... and also get rid of the ...... on the section."></textarea>
      </p>

      <div class="feedback-submit">
        <input type="submit" value="SEND" id="feedback-button-blue" />
        <div class="feedback-ease"></div>
      </div>
    </form>
  </div>
</div>

<button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>
<script src="_include/js/feedback.js"></script>

  <!-- Site footer -->


  <div align="center" >
  <?php
  include('footer.php')
  ?>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


    function toggle_visibility() {
       var e = document.getElementById('feedback-main');
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>

</body>
</html>
