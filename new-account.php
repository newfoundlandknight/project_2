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
    <div id ="main" class="form_100">
  <form class="form" action="send-email.php" method ="post">
    
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="firstName"><b>First name</b></label>
      <input type="text" placeholder="First name" name="firstName" required><br>      
      
      <label for="lastName"><b>Last name</b></label>
      <input type="text" placeholder="Last name" name="lastName" required><br>
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><br>

      
<button type="submit" class="signup">Sign Up</button>
<br><br>
  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    Click here to <a href="logout.php">Logout</a><br><br>
  </form>
</div>
   
   
            
    <?php
require 'footer.php';
?></body>
    </html>
   