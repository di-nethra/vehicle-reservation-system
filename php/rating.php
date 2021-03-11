
<?php  

 require 'connection.php'

?>

<?php 

$rating=$_POST["list"];


$sql="insert into rating_details (client_id,Rating)values('','$rating')";
if(mysqli_query($conn,$sql)){
	header("location:../html/pageFive.html");
	
}
else{
    echo "Error:".$conn->error;
 }
mysqli_close($conn);
?>