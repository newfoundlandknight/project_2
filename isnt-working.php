<?php
        require 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <title>Not working</title>
</head>
<body>
<audio id="myAudio">
  <source src="horse.ogg" type="audio/ogg">
  <source src="horse.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 
</script>

<?php include 'menu-bar.php';?>
        <div class="form_100">
                <div class="form">      
                <img class= "boom" src="images\pc-fire.gif" >
                </div>
        </div>

<?php
        require 'footer.php';
?>
</body>
</html>