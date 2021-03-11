<?php 
 require 'sulaConfig.php'
 ?>

<?php 
$client_id=$_POST["id"];
$sql="delete from login_details where client_id='".$client_id."'";

$result=$conn->query($sql);

if($result){
	header("location:sulaLoginDetails.php");
}
else{
	echo "<script>alert('Delete failed')</script>";
}

?>