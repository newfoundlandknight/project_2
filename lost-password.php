<?php
require 'header.php';
$_SESSION['form_data'] =" ";

?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
  </head>
  <body>
  <?php include 'menu-bar.php';?>
  <div id ="main" class="form_100">
  <form class="form" action="send-email.php" method ="post">
    
      <h1>Password Recovery</h1>
      <p>Please fill in this form to reset password</p>
      <hr>

      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br>




      
<button type="submit" class="signup">Send</button>

  </form>
</div>
            
    <?php
require 'footer.php';
?>
  </body>
  </html> 

