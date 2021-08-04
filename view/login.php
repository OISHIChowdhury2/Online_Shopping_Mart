
<!DOCTYPE html>
<html>
<head>
	
<title>Unite Online Shopping Mart</title>
<meta charset="utf-8">
	<title>Unite Online Shopping Mart</title>
	 <link rel="stylesheet" type="text/css" href="../css/log-reg.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
 	<!-- <script type="text/javascript" src="../javascrip/reg.js"></script>
	 -->
</head>
<body>
	
		<div class="hero">
			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
               <button  type="button" class="toggle-btn" onclick="login()">Log In</button>
	         <button  type="button" class="toggle-btn"onclick="resister()">Register
	     </button>
	 </div>
	      <div class="social-icon">
					<img src="../pic/fb.jpg" >
					<img src="../pic/google-logo.png" >
					<img src="../pic/tweeter.jpg" >

							</div> 
						
				<form class="input" id="login" method="post" action="../controller/logcheck.php" onsubmit="return logval()" >

					<input type="text" class="input-field" name="username" placeholder="Enter the username" id="username" >
					<p id="printname" > </p>

					<input type="password" class="input-field"name="password" id="password">
					<p id="printpass" > </p>
					<br>
					<input type="checkbox" class="chech-box"><span>Remamber password</span>
			  <br>

					<button type="submit" class="submit-btn" name="submit"> Log In</button>
								
							</form>
							



       <form method="POST" action="../controller/reg.php" onsubmit="return validation()" class="input" id="register">
				
				
					<input type="text" name="name" class="input-field" id="user" placeholder="Name" >
					<p id="name" > </p>

					<input type="text" name="username" class="input-field" id="username1" placeholder="Userame" onkeyup="val()">
					
					<div class="" id="usernameErr" style="width: 100%;">
             			
            		</div>

					<p id="msg" > </p>

					<input type="text" name="phone" class="input-field"  id="mobileNumber" placeholder="phone number">
					<p id="mobileno" > </p>

					<input type="text" name="email" class="input-field" id="emails" placeholder="Email">
					<p id="emailids" > </p>
				
					<input type="password" name="password" class="input-field" id="pass" placeholder="Password">
					<p id="passwords"  ></p>
				
					
					<input type="password" name="repass" class="input-field" id="conpass" placeholder="Conform Password">
					<p id="confrmpass"  ></p>
				
					
				
					<input type="area" class="input-field" placeholder="Address" name="address" id="address"  >
               <p id="add"> </p>
              

				<div class="input-field" style="color:#686060;">
			<label>Gender:</label>
 				 <input type="radio" id="male" name="gender" value="male">
			  <label for="male">Male</label>
 			 <input type="radio" id="female" name="gender" value="female">
 			 <label for="female">Female</label>

      
 			
				</div>
				


				<a href="login.php"><input type="submit" name="signup" value="Submit"class="submit-btn" id="regSubBtn"></a>
         


			</form><br><br>


		</div>
	</div>

	<script type="text/javascript">
		var x=document.getElementById("login");
			var y=document.getElementById("register");
			var z=document.getElementById("btn");
			 function resister()
			 {
			 	x.style.left ="-250px";
			 	y.style.left ="0";
			 	z.style.left ="130px";
			 }

			 function login()
			 {
			 	x.style.left ="50px";
			 	y.style.left ="450px";
			 	z.style.left ="0";
			 }
			 
			
			function logval()
			{

		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;

		if(username == "")
			{
				document.getElementById('printname').innerHTML =" ** Please fill the usernamename field";
				return false;
			}
			if((username.length <= 2) || (username.length > 20)) 
			{
				document.getElementById('printname').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}

			if(password == ""){
				document.getElementById('printpass').innerHTML =" ** Please fill the password field";
				return false;
			}




			}		



		function validation(){

		var user = document.getElementById('user').value;
		var username = document.getElementById('username').value;
		 var mobileNumber = document.getElementById('mobileNumber').value;
		 var emails = document.getElementById('emails').value;

		//var username = document.getElementById('username').value;
		var pass = document.getElementById('pass').value;
			var confirmpass = document.getElementById('conpass').value;
	     	    
	    var address = document.getElementById('address').value;

        var number = /^[0-9 ]+$/;
      
        var letters = /^[A-Za-z]+$/;

        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;


			if(user == "")
			{
				document.getElementById('name').innerHTML =" ** Please fill the username field";
				return false;
			}
			if((user.length <= 2) || (user.length > 20)) 
			{
				document.getElementById('name').innerHTML =" ** Username lenght must be between 2 and 20";
				return false;	
			}
			if(user.match(number))
			{
				document.getElementById('name').innerHTML =" ** only characters are allowed";
				return false;
			}	

				


	

			if(mobileNumber == ""){
				document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
				return false;
			}
			if(isNaN(mobileNumber)){
				document.getElementById('mobileno').innerHTML =" ** must write digits only not characters";
				return false;
			}
			if(mobileNumber.length!=11){
				document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 11 digits only";
				return false;
			}



			if(emails == ""){
				document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
				return false;
			}
			if(emails.indexOf('@') <= 0 ){
				document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
				return false;
			}

			if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
				document.getElementById('emailids').innerHTML =" ** . Invalid Position";
				return false;
			}




			if(pass == ""){
				document.getElementById('passwords').innerHTML =" ** Please fill the password field";
				return false;
			}
			if((pass.length <= 5) || (pass.length > 20)) {
				document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
				return false;	
			}

			if(pass.match(passw)){
				document.getElementById('passwords').innerHTML =" ** only characters are allowed";
				return false;
			}



			if(pass!=confirmpass){
				document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
				return false;
			}

			


			if(confirmpass == ""){
				document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
				return false;
			}

			if(address == ""){
				document.getElementById('add').innerHTML =" ** Please fill the Address";
				return false;
			}

	}


			
			</script>
			<script type="text/javascript" src="validation.js"></script>
		</body>
		</html>
