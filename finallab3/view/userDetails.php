<?php
include("session.php");

if (!isset($_GET['username'])) {
    echo "No user selected";
    exit();
}

$username = $_GET['username'];

if (!isset($_SESSION['users'][$username])) {
    echo "User not found!";
    exit();
}

$user = $_SESSION['users'][$username];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>

<h2>User Details</h2>

<p><b>Username:</b> <?php echo $username; ?></p>
<p><b>Password:</b> <?php echo $user['password']; ?></p>

<br>
<a href="userList.php">Back</a>

</body>
</html>