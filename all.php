<?php

include 'header.php';
if(!isset($_SESSION['userName'])){
  header("Location: include/logout.include.php");
}
else {
  $role= $_SESSION['role'];
}

/*$sql="SELECT amount FROM wallet WHERE userId='$userId'";
$result=$conn->query($sql);
$raw=$result->fetch_assoc();
$lastAmount=$raw['amount'];

if($userId==null){
  header("Location: signup.php");
  exit();
}*/
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
<!-- driver -->
<?php
  if ($role=='driver') {
    echo '<div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 formpanel">
        <form action="includes/addhire.include.php" method="POST" enctype="multipart/form-data">
          <label for="currentloc">Current Location :</label><br>
          <input type="text" id="currentLoc" name="currentLoc"><br>

          <label for="travellingTo">Travelling To :</label><br>
          <input type="text" id="travellingTo" name="travellingTo"><br>

          <label for="seats">Seats</label><br>
          <input type="text" id="seats" name="seats"><br>

          <label for="amount">Amount</label><br>
          <input type="text" id="amount" name="amount"><br>

          <label for="departureDate">Departure Date</label><br>
          <input type="date" id="departureDate" name="departureDate"><br>

          <label for="departureTime">Departure Time</label><br>
          <input type="time" id="departureTime" name="departureTime"><br>

          <button class="submit-btn">Submit</button>
        </form>
      </div>
      <div class="col-md-4"></div>

    </div>';
  }
 ?>

<!--  -->

<!-- user -->
<?php
  if ($role=='customer') {
    echo '<div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 formpanel">
        <form action="includes/search.include.php" method="POST" enctype="multipart/form-data">
              <label class="labels" for="from">From</label><br>
              <input type="text" placeholder="From" id="from" name="from" required><br>

              <label class="labels" for="to">To</label><br>
              <input type="text" placeholder="To" id="to" name="to" required><br>

              <button class="submit-btn">Search</button>
          </form>
        </div>
        <div class="col-md-4"></div>

    </div>

    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>';
    $i=0;

    while(isset($_GET["driverId".$i])){
      //echo $_GET["driverId".$i];
      $driverId=$_GET["driverId".$i];

      $sql="SELECT * FROM driver WHERE driverId=$driverId";
      $result=$conn->query($sql);
      $row=$result->fetch_assoc();
      $firstName=$row['firstName'];
      $lastName=$row['lastName'];
      $dId=$row['driverId'];

      $sql="SELECT * FROM hire WHERE driverId=$driverId";
      $result=$conn->query($sql);
      $raw=$result->fetch_assoc();
      $from=$raw['currentLocation'];
      $to=$raw['travellingTo'];
      $amount=$raw['amount'];
      $time=$raw['departureTime'];

      $imageurl=$row['driverPhotograph'];

      $i++;
      echo "<div class='row driverlist'>
          <div class='col-md-4 photopanel'>
            <img src='".$imageurl."' class='driverphoto' alt=''>
          </div>
          <div class='col-md-4 driverdesc'>
            <div class='col-md-6'>
              Name:$firstName $lastName<br>
              From:$from<br>
              Destination:$to<br>
              Depart.Time:$time<br>
            </div>
            <div class='col-md-6'>

            </div>

          </div>
          <div class='col-md-4 amountpanel'>
            <p class='amount'>Amount:$amount</p>
          
          <form action='driverdetails.php' method='POST'>
            <input type='hidden' name='driverId' value='".$dId."'>
            <button>Driver details</button>
          </form>


          </div>
      </div>";
    }
  }
 ?>

<!--  -->


  <!-- admin -->
  <?php
    if ($role=='admin') {
        echo '<div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 formpanel">
            <a class="adminlinks" href="alldrivers.php">All drivers</a>
            <a class="adminlinks" href="allpassengers.php">Passengers</a>
            <a class="adminlinks" href="driverrequests.php">Requests</a>
          </div>
          <div class="col-md-4"></div>
        </div>';
    }
  ?>
<!--  -->

  </div>


</body>

</html>
