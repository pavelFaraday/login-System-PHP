<?php 
require "header.php";
?>

<main id="signup_main"> 
    <h1>Signup</h1>
    <?php 
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo "<h3>Please, Fill in All Fields!<h3>";
            } else if ($_GET['error'] == "invalidmailuid") {
                echo "<h3>Invalid Username or Email!<h3>";
            } else if ($_GET['error'] == "invalidmail") {
                echo "<h3>Invalid Email!<h3>";
            } else if ($_GET['error'] == "invaliduid") {
                echo "<h3>Invalid Username!<h3>";
            } else if ($_GET['error'] == "passwordcheck") {
                echo "<h3>Your Passwords don't match!<h3>";
            } else if ($_GET['error'] == "usertaken") {
                echo "<h3>Username is already taken!<h3>";
            }
        } else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
                echo "<h3>Signup Successfull!<h3>";
            }
        }
    ?>
    <form action="includes/signup.inc.php" method="POST" id="signup">
        <input type="text" name="uid" placeholder="Username">
        <input type="email" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Please, Repeat Password..">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
</main> 

<?php 
require "footer.php";
?>