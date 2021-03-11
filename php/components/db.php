<?php
function connect()
{
    $db = mysqli_connect('localhost', 'root', '', 'location');
    if (!$db) {
        echo "\ndb not connected";
    }
    return $db;
}

function disconnect($con)
{
    if ($con) {
        $con = null;
        echo "db disconnected";
    }

    header('location: ../pageCRUD.php');
}

if (isset($_POST['add'])) {
    $conn_ = connect();

    $destination = $_POST['destination'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];
    $free = $_POST['fee'];

    $query = "INSERT INTO destination SET destination='$destination', distance='$distance', time='$time', free='$free'";

    mysqli_query($conn_, $query);

    disconnect($conn_);
}

if (isset($_GET['del'])) {
    $conn_ = connect();

    $id = $_GET['del'];

    $query = "DELETE FROM destination WHERE id=$id";

    mysqli_query($conn_, $query);

    disconnect($conn_);
}

if (isset($_POST['update'])) {
    $conn_ = connect();

    $destination = $_POST['destination'];
    $distance = $_POST['distance'];
    $time = $_POST['time'];
    $free = $_POST['fee'];

    $query =  "UPDATE destination SET distance='$distance', time='$time', free='$free' WHERE destination='$destination'";

    mysqli_query($conn_, $query);

    disconnect($conn_);
}
