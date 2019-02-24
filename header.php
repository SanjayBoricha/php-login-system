<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login system</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        
        <div class="form">
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="inc/logout.inc.php" method="post">
                <button type="submit" name="logout-submit" class="logout">Logout</button>
            </form>';
                }
                else {
                    echo '<a href="login.php" class="button">Login</a>';
                    echo '<a href="signup.php" class="button">SignUp</a>';
                }
            ?>
            
            
        </div>
        </nav>
    </header>