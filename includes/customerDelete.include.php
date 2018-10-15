<?php
session_start();
require_once 'database.include.php';
$customerId=$_POST['customerId'];
$query = "DELETE FROM customer WHERE customerId='" . $customerId . "'";

mysqli_query($conn,$query);
header("Location:../allpassengers.php");


?>