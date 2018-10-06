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
                <h2 class="greet">Hi Ashan ...</h2>         
                <form action="">
                    <button class="custom-logout">LogOut</button>
                </form>
            </div>

        </div>

        <!-- userlist -->
        <div class="row userlist">
            <div class="col-md-6">
                <div class="col-md-6 detaillabel">
                    UserId<br>
                    Name<br>
                    Address<br>
                    Email<br>
                    Contact No
                </div>
                <div class="col-md-6 detailsview">
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>  
                </div>
            </div>
            <div class="col-md-6 deletebtnholder">
                <form action="">
                    <button class="delete-btn">Delete</button>
                </form>
                
            </div>
        </div>

    </div>

</body>
</html>