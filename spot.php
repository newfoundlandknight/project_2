<?php 
session_start();

if (isset($_POST)) {
    // do post

    if (isset($_POST['title']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['role'])  ) {
    if (!empty($_POST['title']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['role']) ) 
    // now we set the variables from the post
    {
        $title = $_POST["title"];        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $role = $_POST['role'];
        $_SESSION["loggedin"] = true;
        $_SESSION['title'] = $title;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['role'] = $role;

            // we set emailType depending on the returned session role.
            if ($_SESSION['role'] =="admin") {$_SESSION['emailType'] ="newAccount";
                header("location: problem.php");
            }

            if ($_SESSION['role'] =="manager") {$_SESSION['emailType'] ="lostPassword";
                header("location: problem.php");
            }

            if ($_SESSION['role'] =="ceo") {$_SESSION['emailType'] ="Needs help";
                header("location: problem.php");
            }

        }
    }
    

} else 
{
    // do get
}
// var_dump($_SESSION);


$username =  $_SESSION['role'] ?? $_POST['role'] ?? 'role';
//echo $username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form method="post" action="spot.php">
        <select name="title" required>
            <option value="Mr." selected>Mr.</option>    
            <option value="Mrs.">Mrs.</option>
            <option value="Miss">Miss</option>
            <option value="Master">Master</option>
            <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option>
            <option value="other">other</option>
        </select>

        <input type="text" name="firstName" placeholder="First Name" " required style="width:170px;">
        <input type="text" name="lastName" placeholder="Last Name" value="fish" required style="width:170px;">

        <select name="role" required>
            <option value="admin" selected>Admin</option>    
            <option value="manager">manager</option>
            <option value="ceo">CEO</option>
        </select>
                    
        <button type="submit" name="login" value="submit">Login</button>
    </form>
    <?php require 'var_dump.php'; ?>
</body>
</html>