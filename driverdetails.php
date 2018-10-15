<?php
  include 'header.php';
//   if(isset($_SESSION['userName'])){
//     header("Location: all.php");
//   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/driver.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
        <div class="row logopanel">
        <div class="col-md-3 col-sm-3 col-xs-12">
            <img id="logo" src="Assets/justASK.png" alt="">
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12"></div>

        <div class="col-md-3 col-sm-3 col-xs-12"></div>

        <div class="col-md-3 col-sm-3 col-xs-12 signout-panel">
          
            <form action="includes/logout.include.php" method="POST" enctype="multipart/form-data">
            <button class="custom-logout">LogOut</button>
            </form>
        </div>
        </div>
    <?php
        $driverId=$_POST['driverId'];
        $sql="SELECT * FROM driver WHERE userName='$driverId'";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();

        echo"<div class='row driverpanel'>
            <div class='col-md-4'></div>
            <div class='col-md-4 driverwindow'>
                <div class='row'>
                    <img class='drverphoto' src='".$row['driverphotograph']."'>
                </div>
                <div class='row'>
                    <p>".$row['firstName']." ".$row['lastName'].".</p>
                    <p>".$row['address1'].",".$row['address2']."</p>
                    <p>".$row['address3']."</p>
                </div>
            </div>
            <div class='col-md-4'></div>
        </div>";

?>
    </div>
</body>
</html>