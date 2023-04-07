<?php
session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// Check if the user is logged in, if not then redirect him to login page
if ( !isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true 
) {
    header("location: footer.php");
    exit;
}
