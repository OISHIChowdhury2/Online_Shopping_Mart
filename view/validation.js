
var username = document.getElementById("username1");
var usernameErr = document.getElementById("usernameErr");

function val(){
	//err_msg.innerHTML = username.value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
		if(xhttp.readyState === 4 && xhttp.status === 200){
			if(xhttp.responseText==="false"){
				usernameErr.innerHTML = "Available!";
				document.getElementById("regSubBtn").disabled = false;
			}
		}
		else if(xhttp.responseText==="true"){
			usernameErr.innerHTML = "Username taken! Please Try another username";
			document.getElementById("regSubBtn").disabled = true;
		}
	};

	var link = "usercheck.php?username=" + username.value;
	xhttp.open("GET", link , true);
	xhttp.send();
}