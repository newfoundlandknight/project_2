<?php
require 'header.php';?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include 'menu-bar.php';?>
    <div class="form_100">
        <div class="form">
            <?php
                echo "<h2> Welcome ". $_SESSION['title'] ." ". $_SESSION['firstName']." ". $_SESSION['lastName'] ." (". $_SESSION['role'] .")</h2>";

                 if ($_SESSION['role'] =="admin") {echo "<a href='New-account.php'>New account</a><br><a href='isnt-working.php'>isnt-working</a>   ";
                }
        
                if ($_SESSION['role'] =="manager") {echo "<a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>isnt-working</a>   ";
                }
        
                if ($_SESSION['role'] =="ceo") {echo "<a href='Need-help.php'>Need Help</a><br><a href='isnt-working.php'>isnt-working</a>   ";
                }



            ?>
        </div>
    </div>



   
   
            
    <?php
require 'footer.php';
?></body>
    </html>
   