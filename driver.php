<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="CSS/driver.css" /> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
      <div class="row logopanel">
          <div class="col-md-3">
              <img id="logo" src="" alt="">
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-3"></div>
          <div class="col-md-3">
              <button class="btn-primary signOutbtn">Sign Out</button>
          </div>
      </div>
  <div class="row frm">
    <form class="form-horizontal">
     <div class="form-group">
       <label class="control-label col-sm-2" for="Location">Current Location</label>
       <div class="col-sm-10">
          <input type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
    </div>
    <div class="form-group">
   <label class="control-label col-sm-2" for="Destination">Travelling To:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" id="name" placeholder="Enter Destination">
   </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2" for="Weight">Max Weight:</label>
   <div class="col-sm-10">
     <input type="text" class="form-control" id="name" placeholder="Enter Maximum Weight">
   </div>
</div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Depature">Travelling From:</label>
      <div class="col-sm-10">
            <input type="text" class="form-control" id="name" placeholder="Enter Depature Place">
      </div>
  </div>

 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default">Submit</button>
   </div>
 </div>
</div>
</div>
</form>

</body>

</html>
