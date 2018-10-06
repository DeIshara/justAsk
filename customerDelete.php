<?php
session_start();
require_once 'includes/database.include.php';

$query = "DELETE FROM customer WHERE customerId='" . $_SESSION['userSession5'] . "'";

mysqli_query($conn,$query);
header("Location:passenger.php");


?>