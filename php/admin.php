
<?php  

 require 'config.php'

?>

<?php 

$email=$_POST["email"];
$f_name=$_POST["fname"];
$l_name=$_POST["lname"];
$phone=$_POST["tel"];

$sql="insert into client_details (client_id,Email,First_name,Last_name,Phone_num)values('','$email','$f_name','$l_name','$phone')";
if(mysqli_query($conn,$sql)){
	header("location:../html/sulaLogin.html");
	
}
else{
    echo "Error:".$conn->error;
 }
mysqli_close($conn);
?>
