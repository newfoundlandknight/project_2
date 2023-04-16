<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <title>Send Email </title>
  </head>
  <body>
  <?php include 'menu-bar.php';?>
  <div class="form_100">
        <div class="form">
<?php 
          
          
$title = "";
$firstName = "";
$lastName = "";
$psw = "";
$email="";
// if (  empty($_POST['email']) ) {header("location: problem.php");}
if (isset($_SESSION['email'])){ $email = $_POST['email'];}
if (  isset($_POST['firstName']) && isset($_POST['lastName']) ) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']))
    
     {
            //  $title = $_POST["title"];        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        // $role = $_POST['role'];
       if (isset($_POST['psw'])){ $psw = $_POST['psw'];$psw= password_hash($psw, PASSWORD_DEFAULT);} 
       if (isset($_POST['email'])){ $email =$_POST['email'];} 
      //  
// $result = send_mail($email, $firstName, $lastName, $psw);
    }
}
if (isset($_POST['email'])){ $email =  $_POST['email'];} 
    
          
          if (isset($_SESSION["role"])) : 
            // echo $_SESSION['title'] ;
            // echo   $_SESSION['firstName'] ;
            // echo    $_SESSION['lastName'] ;
            // echo   $_SESSION['role'] ;
            // echo $_SESSION['emailType'];

            endif;
            if ($_SESSION['role'] =="admin") {   $title = 'New Account';       }
            if ($_SESSION['role'] =="manager") {  $title = 'Lost Password';         }

            if (isset($_SESSION['form_data']['email'])){ $email = $_SESSION['form_data']['email'];} 
            //complete hack
          ?>
          <label for="from">From:</label><br>
          <input type="text" id="from" name="from" value="<?php echo $email?>">
          <label for="fname">To:</label><br>
          <input type="text" id="fname" name="fname" value="<?php if($_SESSION['emailType'] =="lostPassword"){echo "psw_recovrey@hck.ca";}  if($_SESSION['emailType'] =="newAccount"){echo "register@hck.ca";}?>">
          
          <!-- value="psw_recovrey@hck.ca"> -->
          <label for="lname">Subject:</label><br>
          <input type="text" id="lname" name="lname" value="<?php if($_SESSION['emailType'] =="lostPassword"){echo "Lost Password";}  if($_SESSION['emailType'] =="newAccount"){echo "New Account";}?>"><br><br>
          <label for="emailMessage">Message:</label><br>
          <textarea name="emailMessage" rows="10" >
          <?php 
            if (isset($_SESSION['form_data']))
            { echo   "****** post **" .print_r($_POST) ."********** form_data " . print_r($_SESSION['form_data']);}   

           echo "**************** " . print_r($_SESSION);
           ?>
           </textarea>  <br>
          <input type="submit" value="Submit">

              
        </div>
    </div>

<?php require 'footer.php'; ?>
</body>
</html>