<?php
session start();
ob start();

include "library/config.php";

if(empty($SESSION['username']) or
empty($SESSION['password'])) {
    echo "<p align='center'> You need to login</p>";
    echo "<meta http-equiv='refresh' content='2;url=login.php>";
   } else {
    define('INDEX', true);
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>YouTalk</header>
        <div class='container'>
        </div>
            <aside>
        <ul class='menu'>
            <li> <a href="?page=dashboard" class='active'>Dashboard </a> </li>
            <li> <a href="?page=chat">Chat</a></li>
            <li> <a href="?page=profile">Profile</a></li>
            <li> <a href="?page=settings">Settings</a></li>
            <li> <a href="?page=logout.php">Log Out</a></li>
        </ul>
            </aside>
        <section class="main">
            <?php include "content.php"; ?>
        </section>
        </div>
        <footer>
            Copyright &copy; Webvengers
        </footer>
    </body>
</html>
<?php 
}
?>