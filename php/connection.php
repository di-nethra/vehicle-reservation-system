<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="rating panel";

//create connection

$conn = new mysqli($servername,$username,$password,$dbname);

//check connection

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	echo "connected successfully";
}
 ?>