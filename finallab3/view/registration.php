<?php include("../asset/session.php"); ?>

<form method="post" action="../controller/registrationCheck.php">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    Confirm:
    <input type="password" name="confirm"><br><br>

    <input type="submit" name="submit" value="Signup">
</form>