<?php
  session_start();
  include 'database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
  $userName=$_POST['userName'];
  $birthDay=$_POST['birthDay'];
  $NIC=$_POST['NIC'];
  $telephone=$_POST['telephone'];
  $vehicle=$_POST['vehicle'];
  $address1=$_POST['address1'];
  $address2=$_POST['address2'];
  $address3=$_POST['address3'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $rePassword=$_POST['rePassword'];

  if($password!=$rePassword){
    header("Location: ../newdriver.php?error=password");
  }
  else{
    $sql="SELECT userName FROM driver WHERE userName='$userName'";
    $result=$conn->query($sql);
    $userNameCheck=mysqli_num_rows($result);

    if($userNameCheck>0){
      header("Location: ../newdriver.php?error=UsernameAlreadyExists");
      exit();
    }
    else{
      $encriptedPassword=md5($password);
      $sql="INSERT INTO driver(firstName,lastName,userName,birthDay,NIC,telephone,vehicle,address1,address2,address3,email,password,status)
            VALUES('$firstName','$lastName','$userName','$birthDay','$NIC','$telephone','$vehicle','$address1','$address2','$address3','$email','$encriptedPassword','0')";
      $result=$conn->query($sql);
      echo $firstName,$lastName,$birthDay,$NIC,$telephone,$vehicle,$address1,$address2,$address3,$email,$encriptedPassword;
      //echo("Error description: " . mysqli_error($conn));


      header("Location: ../login.php");
    }
  }
