<?php
require 'header.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="3">
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include 'menu-bar.php';?>
    <div class="form_100">
        <div class="form">
    logged out. Redirecting in 3 seconds.
        </div>
    </div>
<?php require 'footer.php'; ?>
</body>
</html>
<?php 

// sleep(10);
if (isset($_SESSION['kill'])){

$_SESSION = [];
$ses_params = session_get_cookie_params();

$options = array(
    'lifetime' => time()-60,
    'path'     => $ses_params['path'],
    'domain'   => $ses_params['domain'],
    'secure'   => $ses_params['secure'],
    'httponly' => $ses_params['httponly'],
    'samesite' => $ses_params['samesite']);

setcookie(session_name(), '', $options);


echo "logged out";
session_destroy();
header("Location: index.php");
} 
$_SESSION['kill']="kill";
?>