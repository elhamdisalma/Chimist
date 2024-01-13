<!DOCTYPE html>
<html lang="en">
<head>
    <link href="Cirrus-Start-main/." rel="" >  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;"/>
    <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" ></script> 
    <link rel="stylesheet" href="style.css">
    <title>Thank you</title>
    </head>
<body style="font-family: Arial, sans-serif; margin: 0;padding: 0; background-color: #f3eeee;">

<?php
    include"inc/header.php";
?>






    <div class="mt-10 ml-4">
        <ul class="breadcrumb breadcrumb--left ">
            <li class="breadcrumb__item ">
                <a href="home.html" class="text-gray-700" >Home</a>
            </li>
            <li class="breadcrumb__item">
                <a href="About.html" class="text-gray-700">About</a>
            </li>
            <li class="breadcrumb__item breadcrumb__item--active">
                <a href="#" class="text-gray-700">Thank you</a>
            </li>
        </ul>
    </div>





    <div class="placeholder">
        <div class="placeholder-icon"><span class="icon"><i class="fa fa-wrapper fa-envelope x-large"></i></span></div>
        <h6 class="placeholder-title">Thank you!</h6>
        <div class="placeholder-subtitle">You experience was successfuly completed.</div>
        <div class="placeholder-commands u-center">
            <div class="form-group">
                <input type="email" class="form-group-input" placeholder="Your email">
                <button class="btn-primary form-group-btn">Sign Up</button>
            </div>
        </div>
    </div>



<?php
    include"inc/footer.php";
?>
      
</body>
</html>