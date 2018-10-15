<?php 
session_start();
require_once 'database.include.php';


$driverId = $_POST['driverId'] ;

$query = $conn->query("UPDATE driver SET status='1'  WHERE driverId='$driverId'");

echo "<script>alert('Update Sucessfully')";
echo $driverId;
$conn->close();
               
header("Location:../driverrequests.php");