<?php
  session_start();
  include 'database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $userName=$_POST['userName'];
  $birthDay=$_POST['birthDay'];
  $telephone=$_POST['telephone'];
  $address1=$_POST['address1'];
  $address2=$_POST['address2'];
  $address3=$_POST['address3'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $rePassword=$_POST['rePassword'];

  if($password!=$rePassword){
    header("Location: ../newpassenger.php?error=password");
  }
  else{
    $sql="SELECT userName FROM customer WHERE userName='$userName'";
    $result=$conn->query($sql);
    $userNameCheck=mysqli_num_rows($result);

    if($userNameCheck>0){
      header("Location: ../newpassenger.php?error=usernameAlreadyExists");
      exit();
    }
    else{
      $encriptedPassword=md5($password);
      $sql="INSERT INTO customer(firstName,lastName,userName,birthDay,telephone,address1,address2,address3,email,password)
            VALUES('$firstName','$lastName','$userName','$birthDay','$telephone','$address1','$address2','$address3','$email','$encriptedPassword')";
      $result=$conn->query($sql);
      //echo $firstName,$lastName,$birthDay,$NIC,$telephone,$vehicle,$address1,$address2,$address3,$email,$encriptedPassword;
      //echo("Error description: " . mysqli_error($conn));

      header("Location: ../index.php");
    }
  }
