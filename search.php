<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/search.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


   
</head>
<body>
    <div class="container">
        <div class="row logopanel">
            <div class="col-md-3">
                <img id="logo" src="" alt="">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="btn-primary logoutbtn">Log Out</button>
            </div>
        </div>
        <div class="row">
           <div class="col-md-4 col-sm-6 col-xs-12">
           <form>
                <label class="labels" for="from"><b>From</b></label><br>
                <input type="text" placeholder="From" id="from" name="from" required><br>
            
                <label class="labels" for="to"><b>To</b></label><br>
                <input type="text" placeholder="To" id="to" name="to" required>

                <button>Search</button>
            </form>    
           </div>
           <div class="col-md-4 col-sm-3 col-xs-12"></div>
           <div class="col-md-4 col-sm-3 col-xs-12"></div>
        </div>

        <div class="row">
            <div class="driver">
                <div class="col-md-3 driverimgpanel">
                    <img class="driverimg" src="" alt="">
                </div>
                <div class="col-md-9">
                    Travelling from <p></p><br>
                    Travelling To <p></p><br>
                    Departure   <p></p><br>
                    Max seats   <p></p><br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>