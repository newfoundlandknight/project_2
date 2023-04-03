<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP Sessions</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="./css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="background">


        <div class="container col-md-8">

            <div class="navbar-area text-center">
                <a class="page-scroll" href="index.php">HOME</a>
                <a class="page-scroll" href="Send-email.php">email</a>
            </div>

            <div class="text-center">
                <h4 class="title">Use Our Services</h4>
                <p class="text">Stop wasting time and money designing in managing a website that doesn’t get results</p>

                <!--if session exists, add logout-->
                <?php if (isset($_SESSION["firstName"])) : ?>
                    <p class="title">Thank you <?php echo $_SESSION['title'] . " " . $_SESSION['firstName']; ?>, for subscribing.</p>
                    Click here to <a href="logout.php">Logout</a>
                <?php endif; 
                
                
                echo $_SESSION['title'] ;
                echo   $_SESSION['firstName'] ;
                echo    $_SESSION['lastName'] ;
                echo   $_SESSION['role'] ;
                echo $_SESSION['emailType'];
                ?>

            </div>
        </div>
    </body>
</html>


