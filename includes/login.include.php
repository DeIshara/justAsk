<?php
  session_start();
  include '../database.include.php';
  date_default_timezone_set("Asia/Colombo");
  $NIC=$_POST['NIC'];
  $password=$_POST['password'];
  $encriptedPassword=md5($password);

  if(substr($NIC, -1)=='v' && strlen($NIC)==10){
    $sql="SELECT * FROM driverinfo WHERE NIC='$NIC' AND password='$encriptedPassword'";
    $result=$conn->query($sql);

    if(!$row=$result->fetch_assoc()){
      echo "Your username or password is incorrect";
    }else{
      //$_SESSION['userId']=$row['userId'];
    }
  }
  else {
    $sql="SELECT * FROM customerInfo WHERE userName='$NIC' AND password='$encriptedPassword'";
    $result=$conn->query($sql);

    if(!$row=$result->fetch_assoc()){
      echo "Your username or password is incorrect";
    }else{
      //$_SESSION['userId']=$row['userId'];
    }
  }



  header("Location: ../index.php");
