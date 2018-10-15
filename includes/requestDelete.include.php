<?php
session_start();
require_once 'database.include.php';

$driverId=$_POST['driverId'];

$query = "DELETE FROM driver WHERE driverId='$driverId'";

mysqli_query($conn,$query);

header("Location:../driverrequests.php");


?>