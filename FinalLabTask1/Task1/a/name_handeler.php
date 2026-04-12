<?php

$name = $_POST['name'];
echo "name: " . $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>name</title>
</head>
<body> <form method="post" action="name_handeler.php">
    <input type="text" name="name" >
    <input type="submit" name="submit" value="Submit">
</form>
</body></html>