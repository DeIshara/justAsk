<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>

<?php
session_start();
require_once 'includes/database.include.php';

 $query = $conn->query("SELECT * FROM driver where status ='no' ");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; 
 
 if ( $count>0) {
   $_SESSION['userSession6'] = $row['driverId'];

echo '<table>';

echo '<tr >';
echo '<tr>';
echo '<td>';
echo $row['firstName'];
echo '</td>';
          
echo '<td>';
echo $row['lastName'];
echo '</td>';
           
echo '<td>';
echo $row['email'];
echo '</td>';
                       
echo '<td>';
echo $row['birthDay'];
echo '</td>';

echo '<td>';
echo $row['NIC'];
echo '</td>';
echo '<td>';
echo $row['telephone'];
echo '</td>';

echo '<td>';
echo $row['vehicle'];
echo '</td>';
          
echo '<td>';
echo $row['address1'];
echo '</td>';
           
echo '<td>';
echo $row['address2'];
echo '</td>';
                       
echo '<td>';
echo $row['address3'];
echo '</td>';

echo '<td>';
echo $row['status'];
echo '</td>';


echo '<td>';
echo '<a href="requestAccept.php" style="text-decoration: none;" >Accept </a>';
echo '<a href="requestDelete.php" style="text-decoration: none;" >Delete </a>';
echo '</td>';
/*
echo '<td>';
echo '<a href="del_comfirm.php" style="text-decoration: none;" >Delete </a>';
echo '</td>';
echo '<td>';
echo '<a href="reset.php" style="text-decoration: none;" >Reset Password </a>';
echo '</td>';*/
echo '</tr><br>'; 
echo '</table>';

while($row= $query->fetch_assoc())
           {
echo '<table>';

echo '<tr >';
echo '<tr>';
echo '<td>';
echo $row['firstName'];
echo '</td>';
          
echo '<td>';
echo $row['lastName'];
echo '</td>';
           
echo '<td>';
echo $row['email'];
echo '</td>';
                       
echo '<td>';
echo $row['birthDay'];
echo '</td>';

echo '<td>';
echo $row['NIC'];
echo '</td>';
echo '<td>';
echo $row['telephone'];
echo '</td>';

echo '<td>';
echo $row['vehicle'];
echo '</td>';
          
echo '<td>';
echo $row['address1'];
echo '</td>';
           
echo '<td>';
echo $row['address2'];
echo '</td>';
                       
echo '<td>';
echo $row['address3'];
echo '</td>';

echo '<td>';
echo $row['status'];
echo '</td>';


echo '<td>';
echo '<a href="requestAccept.php" style="text-decoration: none;" >Accept </a>';
echo '<a href="driverDelete.php" style="text-decoration: none;" >Delete </a>';
echo '</td>';
/*
echo '<td>';
echo '<a href="reset.php" style="text-decoration: none;" >Reset Password </a>';
echo '</td>';*/
echo '</tr><br>';
echo '</table>';
}
}

 $conn->close();

?>


