<?php
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PHP Sessions</title>
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <?php include 'menu-bar.php';?>



                <!--if session exists, add logout-->
                <?php if (isset($_SESSION["firstName"])) : ?>
                    <p class="title">Thank you <?php echo $_SESSION['title'] . " " . $_SESSION['firstName']; ?>, for subscribing.</p>
                <?php endif;                 ?>

        <?php
require 'footer.php';
?>
  </body>
  </html> 


