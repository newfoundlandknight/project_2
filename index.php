<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: dashboard.php");
    exit;
}

$title = "";
$firstName = "";
$lastName = "";
$role = "";
$emailType="";

if (isset($_POST['title']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['role']) ) {
    if (!empty($_POST['title']) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['role'])
    
    ) {
        $title = $_POST["title"];        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $role = $_POST['role'];
       
    }
}

// Verify credentials
if ($firstName != "" && $role != "") {
    // if ($username == "jack" && $password == "jack13") {
        if (1==1) {

        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION['title'] = $title;
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['role'] = $role;
        // if ($_SESSION['role'] ="ceo") {exit;}
        if ($_SESSION['role'] =="admin") {$_SESSION['emailType'] ="newAccount";
            header("location: new-account.php");
        }

        if ($_SESSION['role'] =="manager") {$_SESSION['emailType'] ="lostPassword";
            header("location: lost-password.php");
        }

        if ($_SESSION['role'] =="ceo") {$_SESSION['emailType'] ="Needs help";
            header("location: need-help.php");
        }

        

        // header("location: dashboard.php");
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
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<?php echo $role;?>

    <div id ="main">
        <h3 >IT SUPPORT login</h3>
            <div id ="form">
                <div>
                    <a href="dashboard.php">HOME</a>
                </div>
            <form method="post" action="index.php">
                <select name="title">
                    <option value="Mr." selected>Mr.</option>    
                    <option value="Mrs.">Mrs.</option>
                    <option value="Miss">Miss</option>
                    <option value="Master">Master</option>
                    <option value="Dr.">Dr.</option>
                    <option value="Prof.">Prof.</option>
                    <option value="other">other</option>
                </select>
                <input type="text" name="firstName" placeholder="First Name" value ="tuna" required>
                <input type="text" name="lastName" placeholder="Last Name" value=2 required>

                <select name="role" required>
                    <option value="admin" selected>Admin</option>    
                    <option value="manager">manager</option>
                    <option value="ceo">CEO</option>
             
                </select>
<!-- 
                <input type="text" name="role" placeholder="Role" value ="admin" required> -->
                <button type="submit" name="login">Login</button>
                </form>








            </div>






    </div>


</body>