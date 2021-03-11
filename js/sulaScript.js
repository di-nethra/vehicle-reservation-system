function checkNewPassword() {
  if(document.getElementById("newPassword1").value!=document.getElementById("newPassword2").value){
    alert("Password mismatch, Try again!");
    return false;
  }
  else{
    alert("Password reset successfull")
    return true;
  }
}
