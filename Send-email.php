<?php
require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
  </head>
  <body>
  <?php include 'menu-bar.php';?>
  <div class="form_100">
        <div class="form">
          <?php 
          
          
$title = "";
$firstName = "";
$lastName = "";
$password = "";
$emailType="";

if (isset($_POST['title']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['role'])  ) {
    if (!empty($_POST['title']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['role'])
    
    ) {
        $title = $_POST["title"];        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $role = $_POST['role'];
       if (isset($_POST['emailtype'])){ $emailType = $_POST['emailType'];}
    }
}

          
          
          if (isset($_SESSION["role"])) : 
            // echo $_SESSION['title'] ;
            // echo   $_SESSION['firstName'] ;
            // echo    $_SESSION['lastName'] ;
            // echo   $_SESSION['role'] ;
            // echo $_SESSION['emailType'];

            endif;
            if ($_SESSION['role'] =="admin") {   $title = 'New Account';       }
            if ($_SESSION['role'] =="manager") {  $title = 'lost Password';         }
  
       
          ?>
          <h2> <?php echo $title; ?>   </h2>
          <label for="fname">To:</label><br>
          <input type="text" id="fname" name="fname" value="<?php echo $_SESSION['firstName']. ".". $_SESSION['lastName']."@gmail.com"?>"    ><br><br>
          <label for="lname">Subject:</label><br>
          <input type="text" id="lname" name="lname" value="<?php echo $_SESSION['emailType']?>"><br><br>
          <label for="emailMessage">Message:</label><br>
          <textarea name="emailMessage" rows="10" ><?php echo $_SESSION['role'] . " " . $_SESSION['emailType']; ?></textarea>  <br>
          <input type="submit" value="Submit">

<?php 

?>
                  
        </div>
    </div>

<?php
require 'footer.php';
?>
</body>
</html>