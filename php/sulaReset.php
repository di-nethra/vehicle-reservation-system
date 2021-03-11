<?php
    require 'sulaConfig.php'
?>

<?php 

$email=$_POST["email"];
$password=$_POST["newpassword1"];

$sql="update login_details set login_pass='".$password."' where email='".$email."'";
$result=mysqli_query($conn,$sql);

if($result){
	
	//header("location:../html/forgotten.html");
	echo "<script>alert('Password resetted successfully')</script>";
}
else{
	echo "<script>alert('error in updating')</script>";
}

 ?>