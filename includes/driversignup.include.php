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
    header("Location: ../newdriver.php?error=password");
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
      
      //echo("Error description: " . mysqli_error($conn));
      
      //file upload
      if ($_FILES["driverPhoto"]["error"] > 0 && $_FILES["vehiclePhoto"]["error"] )
      {
         echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
         echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
       }
       else
       {
         move_uploaded_file($_FILES["driverPhoto"]["tmp_name"],"../uploads/" . $_FILES["driverPhoto"]["name"]);
         echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";
        
         move_uploaded_file($_FILES["vehiclePhoto"]["tmp_name"],"../uploads/" . $_FILES["vehiclePhoto"]["name"]);
         echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";

         $file1="uploads/".$_FILES["driverPhoto"]["name"];
         $file2="uploads/".$_FILES["vehiclePhoto"]["name"];

         $sql="INSERT INTO driver(firstName,lastName,birthDay,NIC,telephone,vehicle,address1,address2,address3,email,password,status,driverPhotograph,vehiclePhotograph)
            VALUES('$firstName','$lastName','$birthDay','$NIC','$telephone','$vehicle','$address1','$address2','$address3','$email','$encriptedPassword','0','$file1','$file2')";
      $result=$conn->query($sql);
      echo $firstName,$lastName,$birthDay,$NIC,$telephone,$vehicle,$address1,$address2,$address3,$email,$encriptedPassword;
        header("location:../additem.php");
       }






      //




      header("Location: ../login.php");
    }
  }
