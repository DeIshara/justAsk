<?php
  session_start();
  include 'database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $from=$_POST['from'];
  $to=$_POST['to'];

  $sql="SELECT driverId FROM hire WHERE currentLocation='$from' AND travellingTo='$to'";
  $result=$conn->query($sql);

  //$drivers=array();
  $var='';
  $i=0;
  while($raw=$result->fetch_assoc()){
    $driverId=$raw['driverId'];
    //array_push($drivers, $driverId);
    $var=$var.'driverId'.$i.'='.$driverId.'&';
    $i++;
  }

  header("Location: ../all.php?$var");
