<!DOCTYPE html>
<?php
    require 'connection.php'
?>
<html>
<head>
    <meta charset="utf-8">
	<title>destination page</title>
	<link rel="stylesheet" type="text/css" href="../css/pageFive.css">
	<script type="text/javascript" src="../js/pageFive.js"></script>
</head>
<body>

<ul class="menue">
	<li><a href="#"><img src="../images/logo.png" class="logo"></a></li>
	<a href="#"><li class="menue">Help</li></a>
	<a href="#"><li class="menue">User</li></a>
</ul>

<center>
<fieldset><h1>Rating panel</h1></fieldset></center>
<table border=1 class='table'>
<tr>
<th>Client_id</th>
<th>Rating</th>
</tr>
<?php
 
 $sql="select * from rating_details";
 $result=mysqli_query($conn,$sql);

 if($result->num_rows>0){

    while($row=$result->fetch_assoc())

        echo "<tr><td>".$row["client_id"]."</td><td>".$row["Rating"]."</td></tr>";

 }
 else{
    echo "<script>alert('Nothing to show')</script>";
 }

?>
</table>

<a href="../html/delrating.html"><button>Delete Rating</button></a>
<a href='../html/pageFive.html'><button>Exit</button></a>


    
  


</body>
</html>

    <ul class="footer">
    	<a href=""><li class="footer">|  T&C  |</li></a>
    	<a href=""><li class="footer">|  Privacy  |</li></a>
    	<a href=""><li class="footer">|  Policy  |</li></a>
    	<a href=""><li class="footer">|  Software  |</li></a>
    	<a href=""><li class="footer">|  Service  |</li></a>
    	<a href=""><li class="footer">|  Agreement  |</li></a>
    	<a href=""><li class="footer">|  Careers  |</li></a>
    	<a href=""><li class="footer">|  Contact  |</li></a>
   
    	<a href="#"><img src="../images/image3.png" width=40 class="smid"></a>
    	<a href="#"><img src="../images/image4.png" width=40 class="smid"></a>
    	<a href="#"><img src="../images/image5.png" width=40 class="smid" ></a>
    	<a href="#"><img src="../images/image6.png" width=40 class="smid"></a>
    	<a href="#"><img src="../images/image7.png" width=40 class="smid"></a>
    	<hr>
    	<center>
    	<h4>&copy Copyright &copy 2020 - PTS Corporation (Pvt) Ltd. All rights reserved.</h4>
    	</center>
    </ul>



</body>
</html>