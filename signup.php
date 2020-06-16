<?php 
require "header.php";
?>

<main id="signup_main"> 
    <h1>Signup</h1>
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