<?php
    require 'config.php'
?>
<html>
<head>
    <meta charset="utf-8">
	<title>vehical reservation system</title>
	<link rel="stylesheet" type="text/css" href="../css/phpstyles.css">
</head>
<body>

<ul class="menue">
	<li><a href="#"><img src="../images/logo.png" width=70></a></li>
	<a href="#"><li class="menue">Log in</li></a>
	<a href="#"><li class="menue">Sign up</li></a>
</ul>

<center>
<fieldset><h1>Admin panel</h1></fieldset></center>
<table border=1 class='table'>
<tr>
<th>Client_id</th>
<th>Email</th>
<th>First name</th>
<th>Last name</th>
<th>Phone</th>
</tr>
<?php
 
 $sql="select * from client_details";
 $result=mysqli_query($conn,$sql);

 if($result->num_rows>0){

    while($row=$result->fetch_assoc())

        echo "<tr><td>".$row["client_id"]."</td><td>".$row["Email"]."</td><td>".$row["First_name"]."</td><td>".$row["Last_name"]."</td><td>".$row["Phone_num"]."</td></tr>";

 }
 else{
    echo "<script>alert('No records available')</script>";
 }

?>
</table>

<a href="../html/delete.html"><button>Delete user records</button></a>
<a href="../html/update.html"><button>Update user records</button></a>
<a href='../html/page2.html'><button>Exit</button></a>

    <ul class="footer">
    	<a href=""><li class="footer">|  T&C  |</li></a>
    	<a href=""><li class="footer">|  Privacy  |</li></a>
    	<a href=""><li class="footer">|  Policy  |</li></a>
    	<a href=""><li class="footer">|  Software  |</li></a>
    	<a href=""><li class="footer">|  Service  |</li></a>
    	<a href=""><li class="footer">|  Agreement  |</li></a>
    	<a href=""><li class="footer">|  Careers  |</li></a>
    	<a href=""><li class="footer">|  Contact  |</li></a>
   
    	<a href="#"><img src="../images/image3.png" width=40 class=smid></a>
    	<a href="#"><img src="../images/image4.png" width=40 class=smid></a>
    	<a href="#"><img src="../images/image5.png" width=40 class=smid ></a>
    	<a href="#"><img src="../images/image6.png" width=40 class=smid></a>
    	<a href="#"><img src="../images/image7.png" width=40 class=smid></a>
    	<hr>
    	<center>
    	<h4>&copy Copyright &copy 2020 - PTS Corporation (Pvt) Ltd. All rights reserved.</h4>
    	</center>
    </ul> 

    
  


</body>
</html>