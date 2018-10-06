<?php

return $conn = mysqli_connect('localhost','root','','ihack');

if (!$conn) {
  die("Connection Failed : " . mysqli_connect_error());
}
