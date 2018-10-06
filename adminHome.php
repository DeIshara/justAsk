<?php 
session_start();
include_once 'includes/database.include.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/Bootsrap/bootstrap.min.css">
</head>
<h1>Admin Home</h1>
<body>
<input type="button"  value="All Drivers" onclick="window.location.href='alldrivers.php'" />
<input type="button"  value="Passengers" onclick="window.location.href='passenger.php'" />
<input type="button"  value="Request" onclick="window.location.href='request.php'" />
</body>
</html>


