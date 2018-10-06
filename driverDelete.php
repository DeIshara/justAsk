<?php
session_start();
require_once 'includes/database.include.php';

$query = "DELETE FROM driver WHERE driverId='" . $_SESSION['userSession4'] . "'";

mysqli_query($conn,$query);
header("Location:alldrivers.php");


?>