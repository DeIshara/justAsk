<?php
  include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SignUp-Passenger</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/Signup.css" />

</head>
<body>
    <div class="container">

        <div class="formcontainer">
        <h1>Register As a Passenger</h1>
        <form action="includes/passengersignup.include.php" method="POST" enctype="multipart/form-data">
                <label class="labels" for="first"><b>First Name</b></label><br>
                <input type="text" placeholder="First Name" id="first" name="firstName" required><br>

                <label class="labels" for="last"><b>Last Name</b></label><br>
                <input type="text" placeholder="Last Name" id="last" name="lastName" required><br>

                <label class="labels" for="user"><b>User Name</b></label><br>
                <input type="text" placeholder="User Name" id="user" name="userName" required><br>

                <label class="labels" for="email"><b>Email</b></label><br>
                <input type="email" placeholder="Email" id="email" name="email" required><br>

                <label class="labels" for="password"><b>Password</b></label><br>
                <input type="password" placeholder="Password"id="password" name="password" required><br>

                <label class="labels" for="repassword"><b> Re-type Password</b></label><br>
                <input type="password" placeholder="Re-type Password" id="repassword" name="rePassword" required><br>

                <label class="labels" for="birthday"><b>Birthday</b></label><br>
                <input type="date" placeholder="Birthday" id="birthday" name="birthDay" required><br>

                <label class="labels address" for="address1"><b>Address1</b></label><br>
                <input type="text" placeholder="Address1"id="address1" name="address1" required><br>

                <label class="labels address" for="address2"><b>Address2</b></label><br>
                <input type="text" placeholder="Address2"id="address2" name="address2"><br>

                <label class="labels address" for="address3"><b>Address3</b></label><br>
                <input type="text" placeholder="Address3"id="address3" name="address3"><br>

                <label class="labels" for="telephone"><b>Telephone</b></label><br>
                <input type="text" placeholder="Telephone" id="telephone" name="telephone" required><br>

                <button>Sign In</button>

             </form>
        </div>

    </div>
</body>
</html>
