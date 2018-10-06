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
      echo("Error description: " . mysqli_error($conn));
      /*$sql="SELECT userId FROM user WHERE userName='$userName' AND password='$password'";
      $result=$conn->query($sql);
      $raw=$result->fetch_assoc();
      $userId=$raw['userId'];

      $sql="INSERT INTO wallet(userId) VALUES('$userId')";
      $result=$conn->query($sql);

      $sql="CREATE TABLE ".$userName."_deposit (depositId INT AUTO_INCREMENT PRIMARY KEY, home DECIMAL(19,2),
            friend DECIMAL(19,2),bank DECIMAL(19,2),job DECIMAL(19,2),other DECIMAL(19,2),dsum DECIMAL(19,2))";
      $result=$conn->query($sql);

      $sql="CREATE TABLE ".$userName."_payment (paymentId INT AUTO_INCREMENT PRIMARY KEY, breakfast DECIMAL(19,2),
            lunch DECIMAL(19,2),dinner DECIMAL(19,2),drinks DECIMAL(19,2),otherf DECIMAL(19,2),transport DECIMAL(19,2),
            stationary DECIMAL(19,2),funds DECIMAL(19,2),other DECIMAL(19,2),psum DECIMAL(19,2))";
      $result=$conn->query($sql);

      $sql="CREATE TABLE ".$userName."_graph (amountId INT AUTO_INCREMENT PRIMARY KEY, amount DECIMAL(19,2),
            deposit DECIMAL(19,2),payment DECIMAL(19,2),dateposted DATE)";
      $result=$conn->query($sql);*/


      /*$sql="INSERT INTO payments(userId) VALUES('$userId')";
      $result=$conn->query($sql);

      $sql="INSERT INTO deposit(userId) VALUES('$userId')";
      $result=$conn->query($sql);*/

      //header("Location: ../welcome.php");
    }
  }
