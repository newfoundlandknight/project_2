<?php
require 'header.php';
// echo '<pre>session';
// var_dump($_SESSION);
// echo '</pre>';
// echo '<pre>post-';
// var_dump($_POST);
// echo '</pre>';
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
<div class="form_100">
        <div class="form1">
        <?php
echo '<pre>session - ';
var_dump($_SESSION);
echo '</pre>';
echo '<pre>post -';
var_dump($_POST);
echo '</pre>';
        ?>

        </div>
</div>

<?php
require 'footer.php';
?></body>
</html>