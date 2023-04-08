<header>
        <!-- nav logo title and hamburger -->
            <div class="top">  
                <nav class="menu">
                <a class="active" href="index.php">Home</a>
                <!-- ***************
                <a href="dashboard.php">Dashboard</a> 
                <a href="new-account.php">New account</a>
                <a href="lost-password.php">Lost password</a>
                <a href="send-email.php">Send email</a>
                <a href="need-help.php">Need help</a>
                <a href="isnt-working.php">isn't working</a>
                <a href="nosession.php">No Session</a>
                <a href="code.php">code</a>
                <a href="problem.php">Problem</a>
                <a href="logout.php">Logout</a>           
                 *************** -->
                <a href="admin.php">Admin</a>   
                <a href="took.php">Empty</a>   
                <a href="/db/logout.php">DB_LOGOUT</a>
                
                </nav>    
                    <a href="#" class="menu_icon"><img id ="burger" src="./images/hamburger.png" height ="50"></a>    
                      
            </div> <span class="username"><?php echo  "User:<br>" . $_SESSION["username_DB"];   ?> </span>
                <h1>HCK IT Support</h1>
                <div><img src="./images/paddle-white.png" height ="50"></div>

</header>
<!-- <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="new-account.php">New account</a>
  <a href="lost-password.php">Lost password</a>
  <a href="send-email.php">Send email</a>
  <a href="logout.php">Logout</a>
</div> -->
