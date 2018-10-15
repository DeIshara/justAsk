<?php
  session_start();
  include 'database.include.php';
  date_default_timezone_set("Asia/Colombo");
  $userName=$_POST['userName'];
  $password=$_POST['password'];
  $encriptedPassword=md5($password);

  if($userName =='admin' && $password =='admin'){
      $_SESSION['userName']=$row['userName'];
      $_SESSION['role']='admin';
      header("Location: ../all.php");
    }
    else{
  
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
      $sql="SELECT status FROM driver WHERE userName='$userName'";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
      $status=$row['status'];

      if($status!=0){
        $_SESSION['userName']=$row['userName'];
        $_SESSION['role']='driver';
        header("Location: ../all.php");
      }
      else {
        header("Location: ../login.php?error=NotAprovedFromAdminPanel");
      }

    }
  }
    //
    // else{
    //   header("Location: ../login.php?error=NotAprovedFromAdminPanel");
    // }

