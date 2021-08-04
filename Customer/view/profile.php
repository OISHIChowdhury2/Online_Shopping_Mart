<?php
//require_once('../model/config.php');
  require_once('../model/reg-log.php');
  session_start();
  $id=$_SESSION['id'];
  $username = $_SESSION['username'];
  $user=get_row($username);
 // echo $id;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online United Mart</title>
  
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


 <link rel="stylesheet" type="text/css" href="../css/styles.css">  
 <link rel="stylesheet" type="text/css" href="../css/style.css">  


 

</head>
<body>

<table class="table">
  <tr>
    <td>
    <img src="../pic/unitlogo.jpeg" width="19%" align="left">
    <div></div>

    <ul>
      <li >
        <a  href="customerpage.php">Home</a></li>
    <li ><a href=""> Customer Care</a>
    </li>
    <li>  <a   href="profile.php" >   
  <?php echo $_SESSION['username'];?> 
    </a>
</li>
</ul>
</td>
</tr>
<tr>
  <td>
 <div class="topnav">
     <div class="search-container">
    <form >
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
  </form>
      
</td>
</tr>
</div>
</div>
<tr>
  <td>
     
 <table align="center" border="1" width="50%" align="center">
   <tr>
         <td> Name:</td>
         <td><p><?php echo $user['name']?></p></td> 
          </tr>
          <tr>
          <td>UserName:</td>
      <td><p><?php echo $user['username']?></p> </td>
          </tr>
        <tr>
         <td>Phone:<td>
          <p><?php echo $user['phone']?></p> </td>
          </tr>
        <tr>
          <td>Email:</td>
            <td><p><?php echo $user['email']?></p> </td>
          </tr>
        <tr>
          <td>Password:</td>
            <td>
              <p><?php echo $user['password']?></p> </td>
          </tr>
        <tr>
          <td>Address:</td>
            <td><p><?php echo $user['address']?></p></td>
         </tr>
          

        <tr>
           <td colspan="2" style="width: 40%;"align="right"><button><a href="../controller/edit.php?id=<?php  $id=$_SESSION['id']; ?>">Edit</a></button>
        </td>
      </tr>

 </table>
  </td>
    </tr>

</table>


  </td>
  </tr>
  </table>
</td>
</tr>
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
        <textarea name="comment" type="comment" class="validate[required,length[6,300]] feedback-input" id="feedback-comment"></textarea>
      </p>

      <div class="feedback-submit">
        <input type="submit" value="SEND" id="feedback-button-blue" />
        <div class="feedback-ease"></div>
      </div>
    </form>
  </div>
</div>

<button id="popup" class="feedback-button" onclick="toggle_visibility()">Feedback</button>

</div>

  <!-- Site footer -->
 <div align="center" >
  <?php
  include('footer.php')
  ?>

  </div>


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
