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

 $query = $conn->query("SELECT * FROM driver ");
 $row=$query->fetch_array();
 
 $count = $query->num_rows; 
 
 if ( $count>0) {
 //  $_SESSION['userSession4'] = $row['id'];

echo '<table>';

echo '<tr >';
echo '<tr>';
echo '<td>';
echo $row['firstName'];
echo '</td>';
          
echo '<td>';
echo $row['email'];
echo '</td>';
           
// echo '<td>';
// echo $row['phone'];
// echo '</td>';
                       
// echo '<td>';
// echo $row['nationality'];
// echo '</td>';

// echo '<td>';
// echo $row['city'];
// echo '</td>';
// echo '<td>';
// echo $row['nights'];
// echo '</td>';

// echo '<td>';
// echo $row['adult'];
// echo '</td>';
          
// echo '<td>';
// echo $row['kid'];
// echo '</td>';
           
// echo '<td>';
// echo $row['baby'];
// echo '</td>';
                       
// echo '<td>';
// echo $row['destination'];
// echo '</td>';

// echo '<td>';
// echo $row['massages'];
// echo '</td>';


echo '<td>';
echo '<a href="update_customer.php" style="text-decoration: none;" >Edit </a>';
echo '</td>';
/*
echo '<td>';
echo '<a href="del_comfirm.php" style="text-decoration: none;" >Delete </a>';
echo '</td>';
echo '<td>';
echo '<a href="reset.php" style="text-decoration: none;" >Reset Password </a>';
echo '</td>';*/
echo '</tr><br>'; 


while($row= $query->fetch_assoc())
           {
echo '<table>';

echo '<tr >';
echo '<tr>';
echo '<td>';
echo $row['firstName'];
echo '</td>';
          
echo '<td>';
echo $row['email'];
echo '</td>';
           
// echo '<td>';
// echo $row['phone'];
// echo '</td>';
                       
// echo '<td>';
// echo $row['nationality'];
// echo '</td>';

// echo '<td>';
// echo $row['city'];
// echo '</td>';
// echo '<td>';
// echo $row['nights'];
// echo '</td>';

// echo '<td>';
// echo $row['adult'];
// echo '</td>';
          
// echo '<td>';
// echo $row['kid'];
// echo '</td>';
           
// echo '<td>';
// echo $row['baby'];
// echo '</td>';
                       
// echo '<td>';
// echo $row['destination'];
// echo '</td>';

// echo '<td>';
// echo $row['massages'];
// echo '</td>';


echo '<td>';
echo '<a href="update_customer.php" style="text-decoration: none;" >Edit </a>';
echo '</td>';
/*
echo '<td>';
echo '<a href="reset.php" style="text-decoration: none;" >Reset Password </a>';
echo '</td>';*/
echo '</tr><br>';

}
}

 $conn->close();

?>


