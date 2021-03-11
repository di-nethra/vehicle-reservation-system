<?php 
 require 'connection.php'
 ?>

<?php 
$client_id=$_POST["id"];
$sql="delete from rating_details where client_id='".$client_id."'";

$result=$conn->query($sql);

if($result){
    header("location:panel.php");
}
else{
    echo "<script>alert('Delete failed')</script>";
}

?>