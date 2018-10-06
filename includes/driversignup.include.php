<?php
  session_start();
  include 'database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $firstName=$_POST['firstName'];
  $lastName=$_POST['lastName'];
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
    header("Location: ../newdriver.php?error=NIC");
  }
  else{
    $sql="SELECT NIC FROM driverInfo WHERE NIC='$NIC'";
    $result=$conn->query($sql);
    $NICCheck=mysqli_num_rows($result);

    if($NICCheck>0){
      header("Location: ../newdriver.php?error=NIC");
      exit();
    }
    else{
      $encriptedPassword=md5($password);
      $sql="INSERT INTO driverInfo(firstName,lastName,birthday,NIC,telephone,vehicle,address1,address2,address3,email,password)
            VALUES('$firstName','$lastName','$birthDay','$NIC','$telephone','$vehicle','$address1','$address2','$address3','$email','$encriptedPassword')";
      $result=$conn->query($sql);
      echo $firstName,$lastName,$birthDay,$NIC,$telephone,$vehicle,$address1,$address2,$address3,$email,$encriptedPassword;
      //echo("Error description: " . mysqli_error($conn));
      

      header("Location: ../login.php");
    }
  }
