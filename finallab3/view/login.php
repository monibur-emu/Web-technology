<?php include("../asset/session.php"); ?>

<form method="post" action="../controller/loginCheck.php">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="submit" value="Login">
</form>

<a href="registration.php">Signup</a>