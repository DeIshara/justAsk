<?php

include 'header.php';
if(!isset($_SESSION['userName'])){
  header("Location: login.php");

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
        <form action="">
          <label for="currentloc">Current Location :</label><br>
          <input type="text" id="currentloc"><br>

          <label for="destination">Travelling To :</label><br>
          <input type="text" id="destination"><br>

          <label for="seats">Seats</label><br>
          <input type="text" id="seats"><br>

          <label for="depart">Departure</label><br>
          <input type="time" id="depart"><br>

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
        <form>
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
  }
 ?>

<!--  -->


  <!-- admin -->
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 formpanel">
            <a class="adminlinks" href="http://">All drivers</a>
            <a class="adminlinks" href="http://">Passengers</a>
            <a class="adminlinks" href="http://">Requests</a>
          </div>
          <div class="col-md-4"></div>
        </div>
<!--  -->

  </div>


</body>

</html>
