<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login System</title>
</head>
<body>
    <header>
        <nav> 
            <a href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Abous Us</a></li>
            </ul>
            <?php 
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="POST" id="logout">
                            <button type="submit" name="logout-submit">Logout</button>
                          </form>';
                } else {
                    echo '<form action="includes/login.inc.php" method="POST" id="login">
                            <input type="text" name="mailuid" placeholder="Username/E-mail..">
                            <input type="password" name="pwd" placeholder="Password..">
                            <button type="submit" name="login-submit">Login</button>
                          </form>
                        
                          <a href="signup.php">Signup</a>';
                }
            ?>          
        </nav>
    </header>
