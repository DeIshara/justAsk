<?php
  include 'header.php';
//   if(isset($_SESSION['userName'])){
//     header("Location: all.php");
//   }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/allpassengers.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row logopanel">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <img id="logo" src="Assets/justASK.png" alt="">
            </div>
                
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
                
            <div class="col-md-4 col-sm-4 col-xs-12 signout-panel"> 
            <a class="backbtn" href="all.php">Back</a>     
                <form action="includes/logout.include.php">
                    <button class="custom-logout">LogOut</button>
                </form>
            </div>

        </div>

        <!-- userlist -->
        

         <?php
            
            $sq="SELECT * FROM customer";
            $result=$conn->query($sq);
            
            while ($row=$result->fetch_assoc()) {
                echo "
                    <div class='row userlist'>
                        <div class='col-md-6'>
                            <div class='col-md-6 detaillabel'>
                                <p>UserId</p>
                                <p> Name</p>
                                <p>Address</p>
                                <p>Email</p>
                                <p>Contact No</p>
                            </div>
                            <div class='col-md-6 detailsview'>
                                <p>".$row['customerId']."</p>
                                <p>".$row['firstName']."</p>
                                <p>".$row['address1']."</p>
                                <p>".$row['email']."</p>
                                <p>".$row['telephone']."</p>  
                            </div>
                        </div>
                        <div class='col-md-6 deletebtnholder'>
                            <form action='includes/customerDelete.include.php' method='POST'>
                                <input type='hidden' name='customerId' value='".$row['customerId']."'>
                                <button class='delete-btn'>Delete</button>
                            </form>
                            
                        </div>
                    </div>
                
                
                
                
                ";
            }
            

        ?>


    </div>

</body>
</html>