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
  <div class="m-8 text-3xl font-semibold">
    <p>Payment</p>
  </div>
  <div class="grid grid-rows-1">
    <div class="grid grid-cols-2 m-8">
      <div class="flex justify-around">
        <ul class="text-3xl">
          <li>Estimated distance - 17km</li>
          <li>Estimated time - 47min</li>
          <li>Total - Rs. 465.00</li>
        </ul>
      </div>
      <div class="flex justify-around">
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d63373.44510690959!2d79.8767714872167!3d6.909688830593932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology%2C%20SLIIT%20Malabe%20Campus%2C%20New%20Kandy%20Rd%2C%20Malabe%2010115!3m2!1d6.9146775!2d79.9729445!4m5!1s0x3ae2594269e27f25%3A0x4fbc6a1c1f6c0988!2sSLIIT%20Metropoliton%20Campus%2C%20Saint%20Michaels%20Road%2C%20Colombo!3m2!1d6.9126132!2d79.8507209!5e0!3m2!1sen!2slk!4v1601105688137!5m2!1sen!2slk" width="100%" height="500" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="grid justify-items-end m-8">
      <a href="pageCRUD.php"><button class="blackbut" onclick="next()"><span>Next</span></button></a>
    </div>
  </div>
  <!--Footer-->
  <?php include "components/footer_bar.php"; ?>
  <!-- JavaScript dependencies -->
  <?php include "components/javascript_includes.php"; ?>
</body>

</html>