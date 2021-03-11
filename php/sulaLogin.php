<?php 
 require 'sulaConfig.php'
 ?>

<?php 

$client_email = $_POST['email'];
$password = $_POST['password'];

$sql="select * from login_details where email='".$client_email."' and login_pass='".$password."'";
$result=mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);

if($count==1) {
	header("location:../html/pageThree.html");
}
else{
	echo "<script>alert('Log in Failed')</script>";
	}



?>