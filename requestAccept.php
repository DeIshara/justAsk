<?php 
session_start();
require_once 'includes/database.include.php';

	

if(isset($_POST['edit']))
{		

$status=$_POST['status'];



$driverId = $_SESSION["userSession6"] ;

$query = $conn->query("UPDATE driver set status='$status'  WHERE driverId='$driverId'");


echo "<script>alert('Update Sucessfully'); window.location='request.php'</script>";
		
}
$driverId = $_SESSION["userSession6"] ;
$select_query = $conn->query("SELECT * FROM driver WHERE driverId='$driverId'");
$userRow = $select_query->fetch_array();	
	
$conn->close();
?>
<html>
<head>
<title>Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<form  method="post" action="">

<input type="hidden" name="user_id" class="txtField" value="<?php echo $userRow['driverId']; ?>">
<input type="hidden" name="status" class="txtField"  value="<?php echo 'yes'; ?>"><br>

<footer>
<button type="submit"  name="edit">
&nbsp; Submit
</button>

<input type="button"  value="Cancel" onclick="window.location.href='admin_home.php?back'" />
</footer>
</form>                  
</body>
</html>