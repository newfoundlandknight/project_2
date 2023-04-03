<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

$username = "";
$password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}

// Verify credentials
if ($username != "" && $password != "") {
    if ($username == "jack" && $password == "jack13") {

        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
    } else {
        echo "<h1>Oops! Something went wrong. Please try again</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Project 2 IT SUPPORT</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>


    



<body class="background">
        <div class="container col-md-8">
<h3 >IT SUPPORT login</h3>


            <div class="navbar-area text-center">
                <a class="page-scroll" href="dashboard.php">HOME</a>
            </div>
            <form method="post" action="login.php">
                    <div class="row">
            <div class="text-center">
                    <div class="row">
                        
                        <select name="Title"  class="form-select" >
                            <option value="Mr." selected>Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Miss">Miss</option>
                            <option value="Master">Master</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prof.">Prof.</option>
                            <option value="other">other</option>
                        </select>
                    <label for="username" class="col-sm-3">Username:</label>
                        <input  type="text" name="username" class="col-sm-6" value="jack" />
                    </div>
                    <div class="row">
                        <label for="password" class="col-sm-3">Password:</label>
                        <input  type="password" name="password" class="col-sm-6" value="jack"  />
                    </div>

                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </form>
            </div>
        </div>
    </body>


</html>


