<?php
require 'header.php';
//  $no_error
// var_dump($_GET); // Element 'foo' is string(1) "a"
// var_dump($_POST); // Element 'bar' is string(1) "b"
//var_dump($_REQUEST); // Does not contain elements 'foo' or 'bar'

if (isset($_POST['submit'])) {
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
 //exit;
    # process the $_POST data
    if (1==1) {
       
        $_SESSION['form_data'] = $_POST;
        
         header ("Location: send-email.php"); // this is the start of the problem
         exit;
    }
}
if (isset($_POST['submit'])) {
   // echo $_SESSION["loggedin"];
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New account form</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php include 'menu-bar.php';?>
    <div id ="main" class="form_100">
  <form class="form" action="new-account.php" method ="POST">
    
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="firstName" style="width:160px"><b>First name</b></label>
      <input type="text" placeholder="First name" name="firstName" required ><br>      
      
      <label for="lastName"  style="width:160px"><b>Last name</b></label>
      <input type="text" placeholder="Last name" name="lastName" required ><br>
      
      <label for="email" style="width:160px"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required ><br>

      <label for="psw" style="width:160px"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw"   ><br>

      <label for="psw-repeat" style="width:160px"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat"   ><br>

   <br>

  <!-- <input type = "submit"  value = "submit">-->
 <button type="submit" name = "submit" class="signup" value="submit">Sign Up</button> 
<br><br>
  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 
  </form>
</div>
   
   
            
    <?php
require 'footer.php';
?></body>
    </html>
   