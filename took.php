<?php
 session_start();




 //session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// if ( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true 
// ) {
//     header("location: db/login.php");
//     exit;
// } 


require 'db/config.php';


        // Prepare a select statement
        $sql = "SELECT * FROM users";
// Check connection

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
  }
  
  $sql = "SELECT id, firstname, lastname FROM users";
  $result = $link->query($sql);
  

  //$link->close();



$_SESSION["img_txt"] = "this is the some text";
$cookie_name = "img_txt";
$cookie_value = "this is the some  text";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="style.css" />
    <script>
// setTimeout(function(){
//    window.location.reload();
// }, 61001);
// setTimeout(function(){
//    alert("Hello! I am an alert box!!10 secs ");
// }, 50000);

        function showUser(str) {
        if (str == "") { // if str is nothing throw nothing
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else { // otherwise we are gonna fetch something
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
            };
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.send();
        }
        }
    </script>
</head>
<body>
<?php include 'menu-bar.php';?>
<div class="form_100">
    <div id="mydiv">
        <div id="mydivheader">Click here to move</div>
        <div id="mydivmain">fillinjg</div>
        <div id="norm"><?php include "var_dump.php"; ?></div>
        <div id="mydivmain2" class="mydivmain">fillinjg</div>
        
        <div id  ="mydivbottom"> </div>
    </div>
    <div class="form">Example of clipping path. 
        <!-- <div class ="h7">CLIPPING PATH</div> -->
        <div class ="h7">OCEAN</div>

<?php 
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



  //if  (!isset($_SESSION['title'])) {echo "not set";} else {echo "set";}
  //if  (empty($_SESSION['title'])) {echo "empty";} else {echo $_SESSION['title'];}
?>
    <div id ="iframe">Seems iframe elements do not like to share $_SESSION variables, cookies passed the info "this is the some text" instead.            
        <iframe name ="iframe_a" src="blur.php" width="100%" height="300" style="border:none;"></iframe>
    </div>
  
        <div name="users1" class="users1 stick " >
  <!-- <option value="">Select a person:</option> -->
 <h3>Click on the user for more info. (XMLHttpRequest)</h3>


        <?php 
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<div onclick='showUser(" .$row["id"].")''>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "</div>";
            }
          } else {
            echo "0 results";
          }
        ?>  </div>
</form>
        <br><div id="txtHint"><b>Person info will be listed here...</b></div>
  
 
        <script>localStorage.setItem('test2', 'new value');</script>
    <!-- Script -->
    <!-- <script>localStorage.setItem('test2', 'testing 1');</script>
    <script>localStorage.setItem('tuna', 'fish');</script> -->
    <script src="script.js"></script>
    </div><!--  form class -->
</div><!-- end of form_100 -->
    <?php require 'footer.php'; ?>
</body>
</html>