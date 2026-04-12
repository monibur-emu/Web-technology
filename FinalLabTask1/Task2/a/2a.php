<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body> <form method="post" action="2a.php">
      email:  <input type="email" name="email" >
    <input type="submit" name="submit" value="Submit">
</form>
</body></html>

<?php
echo "email: " . $_POST['email'];
?>
