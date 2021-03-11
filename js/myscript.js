function checkpassword() {
  if(document.getElementById("pass1").value!=document.getElementById("pass2").value){
    alert("Password Mismatch Try Again!");
    return false;
  }
  else{
    alert("You have successfully signed in!")
    return true;
  }
}

function loadvehicle(type)
{
	if(type=='option1'){
		alert("Your car is on the way!")
	}
	else if(type=='option2'){
		alert("Your Three-wheel is on the way!")
	}
	else if(type=='option3'){
		alert("Your Van is on the way!")
	}
	else if(type=='option4'){
		alert("Your Motor-Bicycle is on the way!")
	}
	else {
		alert("Your Mini van is on the way!")
	}
}