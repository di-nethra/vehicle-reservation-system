<?php 
 require 'config.php'
 ?>

<?php 
$client_id=$_POST["id"];
$sql="delete from client_details where client_id='".$client_id."'";

$result=$conn->query($sql);

if($result){
	header("location:interface.php");
}
else{
	echo "<script>alert('Delete failed')</script>";
}

?>