<header>
        <!-- nav logo title and hamburger -->
            <div class="top">  
                <nav class="menu">

    <?php 
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && isset($_SESSION["run"]) && $_SESSION["run"] === true) {
   echo '<a class="active" href="index.php">Home</a>
                <a href="blank.php">blank</a> 
                <a href="admin.php">Admin</a>   
                <a href="took.php">API</a>  ';
}
    ?>

  
                <a href="./db/logout.php">DB_LOGOUT</a>
                
                </nav>    
                    <a href="#" class="menu_icon"><img id ="burger" src="./images/hamburger.png" height ="50"></a>    
                      
            </div> <span class="username"><?php echo  "User:<br>" . $_SESSION["username_DB"];   ?> </span>
                <h1>HCK IT Support</h1>
                <div><img src="./images/paddle-white.png" height ="50"></div>

</header>

