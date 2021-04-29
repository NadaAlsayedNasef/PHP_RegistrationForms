<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:signin.php');
}
?>
<html>
    <head>
        <title>Lorette</title>
        <meta charset="utf-8">
        
        <link rel="icon" href="img/icon1.png">
        <link href="https://fonts.googleapis.com/css2?family=Gayathri&family=Marck+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Gayathri&family=Lemonada&family=Marck+Script&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
        <header class="signin">
                <div class="container">
                    <form class="input-group">
                        <h1> WELCOME <span class="colorchange"><?php echo $_SESSION['username'];?></span><br>
                        <?php echo $_SESSION['E_MAIL'];?><br>
                        <?php echo $_SESSION['PASSWORD'];?><br>
                        .
                        </h1>
                        <div class='buttons'>
                            <a href="logOut.php" class="main-button-icon"> Log Out </a>
                            <!--<a href="main.html" class="my-button"> user</a>-->
                        </div>
                    </div>  
                </div>
        </header>
    </body>
</html>
	
    