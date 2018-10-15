<?php
  session_start();
  include 'database.include.php';
  $userName=$_SESSION['userName'];

  date_default_timezone_set("Asia/Colombo");

  $currentLocation=$_POST['currentLoc'];
  $travellingTo=$_POST['travellingTo'];
  $seats=$_POST['seats'];
  $amount=$_POST['amount'];
  $departureDate=$_POST['departureDate'];
  $departureTime=$_POST['departureTime'];

  $sql="SELECT driverId FROM driver WHERE userName='$userName'";
  $result=$conn->query($sql);
  $raw=$result->fetch_assoc();
  $driverId=$raw['driverId'];

  //echo $driverId,$travellingTo,$seats,$amount,$departureDate,$departureTime;
  $sql="INSERT INTO hire(driverId,currentLocation,travellingTo,seats,amount,departureDate,departureTime)
  VALUES('$driverId','$currentLocation','$travellingTo','$seats','$amount','$departureDate','$departureTime');";
  $result=$conn->query($sql);

  echo("Error description: " . mysqli_error($conn));
  header("Location: ../all.php?recordsuccesfullyCreated");
