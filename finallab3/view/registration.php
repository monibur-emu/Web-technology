<?php include("session.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<h2>Signup / Registration</h2>

<form method="post" action="registrationCheck.php">
    <fieldset>
        <legend>REGISTER</legend>

        Username<br>
        <input type="text" name="username"><br><br>

        Password<br>
        <input type="password" name="password"><br><br>

        Confirm Password<br>
        <input type="password" name="confirm"><br><br>

        <input type="submit" name="submit" value="Signup">
    </fieldset>
</form>

<br>
<a href="login.php">Back to Login</a>

</body>
</html>