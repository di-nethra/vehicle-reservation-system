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

<?php
include "components/db.php";
if (isset($_GET['edit'])) {
  $conn_ = connect();

  $id = $_GET['edit'];

  $query = "SELECT * FROM destination WHERE id=$id";

  $results = mysqli_query($conn_, $query);

  $row = mysqli_fetch_array($results);

  $destination = $row['destination'];
  $distance = $row['distance'];
  $time = $row['time'];
  $fee = $row['free'];

  //disconnect($conn_);
}
?>

<body class="text-gray-700 bg-white" style="font-family: 'Source Sans Pro', sans-serif">
  <!--Nav-->
  <?php include "components/navigation_bar.php"; ?>
  <!--Content-->
  <div class="m-8 text-3xl font-semibold">
    <p>Destination</p>
  </div>
  <div class="grid grid-rows-1">
    <form method="post" action="components/db.php">
      <div class="grid grid-cols-2 m-8">
        <div class="flex justify-around">
          <ul class="text-3xl">
            <li>Destination - <input type="text" id="destination" name="destination" placeholder="Panadura" value="<?php echo (isset($destination)) ? $destination : ''; ?>" required></li>
            <li>Estimated distance - <input type="number" min="1" id="distance" name="distance" placeholder="17km" value="<?php echo (isset($distance)) ? $distance : ''; ?>" required></li>
            <li>Estimated time - <input type="number" min="1"  id="time" name="time" placeholder="47min" value="<?php echo (isset($time)) ? $time : ''; ?>" required></li>
            <li>Total - <input type="number" min="1" id="fee" name="fee" placeholder="Rs. 465.00" value="<?php echo (isset($fee)) ? $fee : ''; ?>" required></li>
          </ul>
        </div>
        <div class="flex justify-around">
          <?php
          $conn_ = connect();
          $query = "SELECT * FROM destination";
          $results = mysqli_query($conn_, $query);
          ?>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Destination</th>
                <th>Distance</th>
                <th>Time</th>
                <th>Fee</th>
              </tr>
            </thead>

            <?php while ($row = mysqli_fetch_array($results)) { ?>
              <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['destination']; ?></td>
                <td><?php echo $row['distance']; ?></td>
                <td><?php echo $row['time']; ?></td>
                <td><?php echo $row['free']; ?></td>
                <td>
                  <a href="pageCRUD.php?edit=<?php echo $row['id']; ?>" class="edit_btn"><i class="fas fa-edit"></i></a>
                </td>
                <td>
                  <a href="components/db.php?del=<?php echo $row['id']; ?>" class="del_btn"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php } /*disconnect($conn_);*/ ?>

          </table>
        </div>
      </div>
      <div class="flex items-center justify-center  m-8">
        <!-- <button type='submit' class="blackbut" name="search"><span>Search</span></button></a> -->
        <button type='submit' class="blackbut" name="add"><span>Add</span></button>
        <button type='submit' class="blackbut" name="update"><span>Update</span></button>
<!-- <button type='submit' class="blackbut" onclick="next()"><span>Delete</span></button> -->
      </div>
    </form>
  </div>
  <a href="../html/pageFive.html"><button class="blackbut"><span>Next</span></button></a>       

  <!--Footer-->
  <?php include "components/footer_bar.php"; ?>
  <!-- JavaScript dependencies -->
  <?php include "components/javascript_includes.php"; ?>
</body>

</html>