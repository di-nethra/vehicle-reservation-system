<!--
    PROJECT ID : MLB_PG.01.01_02
    CASE STUDY NAME : Online Vehicle Reservation
    CAMPUS/CENTER : Malabe
    Author: Perera B. S. S. (@sithumonline)
    Reg. No : IT20254698 
    Website: https://ebonynon.github.io   
-->
<!DOCTYPE html>
<html lang="en">

<head id="head">
  <title>Yaman Vehicle Reservation</title>
  <!-- CSS dependencies -->
  <?php include "components/stylesheet_includes.php"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">
  <!--Nav-->
  <?php include "components/navigation_bar.php"; ?>
  <!--Content-->
  <div class="grid grid-cols-2 gap-4 m-8">
    <div class="border-solid border-4 border-gray-600 indexbox">
      <p class="font-medium text-4xl">
        Get in the driver's <br />
        seat and get paid
      </p>
      <p class="text-base my-6">
        Drive on the platform with the largest network of active riders.
      </p>
      <a href="../html/page2.html"><button class="blackbut" onclick="singup()"><span>Sign up to drive</span></button></a>
    </div>
    <div class="imagebox">
      <p class="text-3xl my-6 mr-8">
        The Technology <br />
        That Enables
      </p>
      <p class="text-3xl my-6 mr-8 font-bold">
        FASTER, SAFER, SMARTER <br />Traveling.
      </p>
    </div>
  </div>
  <div class="grid grid-cols-2 index-container text-white whitebox mb-8">
    <div class="flex items-center justify-center">
      <div>
        <p class="font-medium text-4xl">The Yaman App and how it works</p>
        <ul class="text-3xl my-6 mr-8 list-disc">
          <li>Book in Just 2 Taps</li>
          <li>Get a Driver</li>
          <li>Track Your Driver</li>
        </ul>
      </div>
    </div>
    <div>
      <img src="../images/canvas003.png" style="width: 300px; height: 590.45px;" />
    </div>
  </div>
  <!--Footer-->
  <?php include "components/footer_bar.php"; ?>
  <!-- JavaScript dependencies -->
  <?php include "components/javascript_includes.php"; ?>
</body>

</html>
