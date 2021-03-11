
<?php  

 require 'connection.php'

?>

<?php 

$rate=$_POST["rate"];


if($rate=='1'){
	$rating='Very poor';
}
else if($rate=='2'){
	$rating='Poor';
}
else if($rate=='3'){
	$rating='Average';
}
else if($rate=='4'){
	$rating='Good';
}
else if($rate=='5'){
	$rating='Excellent';
}
else {
	echo "<script>alert('Error')</script>";
}


$sql="insert into rating_details (client_id,Rating)values('','$rating')";
if(mysqli_query($conn,$sql)){
	header("location:../html/pageFive.html");
	
}
else{
    echo "Error:".$conn->error;
 }
mysqli_close($conn);
?>