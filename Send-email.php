<?php
require 'header.php';
?>

<?php if (isset($_SESSION["firstName"])) : 
    
  


        // echo $_SESSION['title'] ;
        // echo   $_SESSION['firstName'] ;
        // echo    $_SESSION['lastName'] ;
        // echo   $_SESSION['role'] ;
        // echo $_SESSION['emailType'];
                    ?>
    
    
    Click here to <a href="logout.php">Logout</a><br><br>
   
            
                    
               
  <label for="fname">To:</label><br>
    <input type="text" id="fname" name="fname" value="<?php echo $_SESSION['firstName']. ".". $_SESSION['lastName']."@gmail.com"?>"    ><br><br>
  <label for="lname">Subject:</label><br>
    <input type="text" id="lname" name="lname" value="<?php echo $_SESSION['emailType']?>"><br><br>
    <label for="emailMessage">Message:</label><br>
    <textarea name="emailMessage" rows="6" cols="40"><?php echo $_SESSION['role'] . " " . $_SESSION['emailType']; ?></textarea>

  <input type="submit" value="Submit">
                <?php endif;

                
                
                 ?>


<?php
require 'footer.php';
?>