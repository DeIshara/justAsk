<?php
  session_start();
  include 'database.include.php';
  date_default_timezone_set("Asia/Colombo");
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $encriptedPassword=md5($password);

    $sql="SELECT * FROM driver WHERE userName='$userName' AND password='$encriptedPassword'";
    $result=$conn->query($sql);

    if(!$row=$result->fetch_assoc()){
      $sql="SELECT * FROM customer WHERE userName='$userName' AND password='$encriptedPassword'";
      $result=$conn->query($sql);

      if(!$row=$result->fetch_assoc()){
        echo "Your username or password is incorrect";
        header("Location: ../login.php?error=incorrectUsernameOrPassword");
      }else{
        $_SESSION['userName']=$row['userName'];
        $_SESSION['role']='customer';
        header("Location: ../all.php");
      }

    }else{
      $_SESSION['userName']=$row['userName'];
      $_SESSION['role']='driver';
      header("Location: ../all.php");
    }
