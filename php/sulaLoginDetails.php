<?php
    require 'sulaConfig.php'
?>
<html lang="en">
  <head>
    <title>Yaman Vehicle Reservation</title>
    <link rel="stylesheet" href="../css/sulaLogin.css" />
	<script type="text/javascript" src="../js/sulaScript.js"></script>
  <nav class="backgroundYellow">
   <div class="marginAuto px-6 py-2 flex justify-between items-center">
     <a class="font-bold text-2xl lg:text-4xl" href="#">
        <img src="../images/nav/index00.png">
      </a>
      <div class="hidden lg:block">
        <ul class="inline-flex btnMargin">
          <li><a class="px-4 font-bold"></a></li>
          <li>
            <a class="px-4 hover:grey" href="#">
              <button
                class="backgroundYellow1 hover:backgroundYellow2 hover:textWhite textBlack font-bold py-2 px-4 rounded-full">User
              </button></a>
          </li>
          <li>
            <a class="px-4 hover:grey" href="#">
              <button
                class="backgroundYellow1 hover:backgroundYellow2 hover:textWhite textBlack font-bold py-2 px-4 rounded-full"
              >
                Help
              </button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--Content-->
  <div class="grid col-span-3 grid-rows-3 m-8 background">
    <div
      class="place-self-center border-solid border-4 col-span-2 row-span-2 border-black login-box form"
    >
      <fieldset><h1>Login Details</h1></fieldset></center>
<table border=1 class='table'>
<tr>
<th>Client_id</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php
 
 $sql="select * from login_details";
 $result=mysqli_query($conn,$sql);

 if($result->num_rows>0){

    while($row=$result->fetch_assoc())

        echo "<tr><td>".$row["client_id"]."</td><td>".$row["email"]."</td><td>".$row["login_pass"]."</td></tr>";

 }
 else{
    echo "<script>alert('No records available')</script>";
 }

?>
</table>

<a href="../html/sulaDelete.html"><button class="backgroundYellow1 hover:backgroundYellow2 hover:textWhite textBlack font-bold py-2 px-4 rounded-full">Delete user records</button></a>
<a href='../html/sulaLogin.html'><button class="backgroundYellow1 hover:backgroundYellow2 hover:textWhite textBlack font-bold py-2 px-4 rounded-full">Exit</button></a>

    </div>
  </div>
  <!--Footer-->
  <footer class="backgroundYellow">
    <div class="grid">
      <div class="">
        <ul class="flex items-center justify-center">
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >T&C</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Privacy</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Policy</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Software</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Service</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Agreement</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >Careers</a
            >
          </li>
          <li class="mx-4 font-bold">
            <a
              href="#"
              class="hover:underline hover:backgroundYellow2 hover:textWhite"
              >ContactUs</a
            >
          </li>
		  </ul>
		  <ul class="flex items-center justify-center inline-flex">
          <li class="mx-2">
            <a href="#" class="hover:textWhite"
              ><img src="../images/logo1.png" width=40 class="socialLogo">
            </a>
          </li>
          <li class="mx-2">
            <a href="#" class="hover:textWhite"
              ><img src="../images/logo3.png" width=40 class="socialLogo"></a>
          </li>
          <li class="mx-2">
            <a href="#" class="hover:textWhite"
              ><img src="../images/logo4.png" width=40 class="socialLogo"></a>
          </li>
          <li class="mx-2">
            <a href="#" class="hover:textWhite"
              ><img src="../images/logo5.png" width=40 class="socialLogo"></a>
          </li>
          <li class="mx-2">
            <a href="#" class="hover:textWhite"
              ><img src="../images/logo6.png" width=40 class="socialLogo"></a>
          </li>
        </ul>
      </div>
      <hr />
      <div class="flex items-center justify-center my-3">
        <p class="font-bold">
          © Copyright © 2020 - PTS Corporation (Pvt) Ltd. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</html>
