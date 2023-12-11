function redirectToPersonal() {
  window.location.href = "Register.php";
}

function redirectToBusiness() {
  window.location.href = "RegisterB.php";
}


function checkPassword(){
	if(document.getElementById("psw").value != document.getElementById("confrmpsw").value){
		alert("Password Mismatch");
		return false;
	}
	else{
		alert("Success");
		return true;
	}
}

function enablebutton(){
	if(document.getElementById("Privacycheckbox").checked){
		document.getElementById("submitbttn").disabled=false;
	}
	else{
		document.getElementById("submitbttn").disabled=true;
	}
}