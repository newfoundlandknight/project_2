<?php
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     session_destroy();
//     //exit;
// }
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    session_destroy();
    header("location: login.php");
    echo "logged in";
   // exit;
}
// Include config file
require_once "config.php";
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, firstName, lastName, email, password FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            // Set parameters
            $param_username = $username;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables

                    mysqli_stmt_bind_result($stmt, $id, $username, $firstName, $lastName, $email, $hashed_password);


                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            if(!isset($_COOKIE["PHPSESSID"]))
                                {
                                session_start();
                                }
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id_DB"] = $id;
                            $_SESSION["username_DB"] = $username;
                            $_SESSION["lastName_DB"] = $lastName;
                            $_SESSION["firstName_DB"]= $firstName;
                            $_SESSION["email_DB"]= $email;
                            // ************************************
                            if(!empty($_POST["remember"])) {
                                setcookie ("username",$username,time()+ 3600, "/");
                                setcookie ("password",$hashed_password,time()+ 3600, "/");
                                //echo "Cookies Set Successfuly";
                                //exit;
                            } else {
                                setcookie("username","");
                                setcookie("password","");
                                //echo "Cookies Not Set";
                               // exit;
                            }
// ***************************************
                            // Redirect user to welcome page
                            // var_dump($_SESSION); exit;
                            header("location: ../index2.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "PInvalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "UInvalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    // Close connection
    mysqli_close($link);
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../style.css"> -->
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="testing<?php //echo $username; ?>" >
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" autocomplete="on" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="testing">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group"><p><input type="checkbox" name="remember" /> Remember me	</p>
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
        <!-- <h2>default username: testing  password: testing</h2> -->
    </div>
</body>
</html>