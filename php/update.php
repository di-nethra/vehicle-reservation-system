<?php
    require 'config.php'
?>

<?php 

$client_id=$_POST["id"];
$email=$_POST["email"];
$f_name=$_POST["fname"];
$l_name=$_POST["lname"];
$phone=$_POST["tel"];

$sql="update client_details set Email='".$email."',First_name='".$f_name."',Last_name='".$l_name."',Phone_num='".$phone."'where client_id='".$client_id."'";
$result=mysqli_query($conn,$sql);

if($result){
	header("location:interface.php");
}
else{
	echo "<script>alert('error in updating')</script>";
}

 ?>