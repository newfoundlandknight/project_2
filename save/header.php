<?php
// session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false) {
    header("location: 1dashboard.php");
    exit;
}
else {
    header("location: login.php");
}
?>