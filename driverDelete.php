<?php
session_start();
require_once 'includes/database.include.php';

$query = "DELETE FROM driver WHERE driverId='" . $_SESSION['userSession6'] . "'";

mysqli_query($conn,$query);
header("Location:request.php");


?>