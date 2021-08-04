
function ajax(){
	const name = document.getElementById('name').value;
	const xhttp	= new XMLHttpRequest();

	xhttp.open('POST','../controller/serch.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
}
