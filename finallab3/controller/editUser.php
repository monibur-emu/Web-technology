<?php
include("session.php");

$username = $_GET['username'];

if (!isset($_SESSION['users'][$username])) {
    echo "User not found!";
    exit();
}

if (isset($_POST['update'])) {
    $newPassword = $_POST['password'];

    $_SESSION['users'][$username]['password'] = $newPassword;

    header("Location: userList.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h2>Edit User</h2>

<form method="post">
    Username<br>
    <input type="text" value="<?php echo $username; ?>" disabled><br><br>

    New Password<br>
    <input type="password" name="password"><br><br>

    <input type="submit" name="update" value="Update">
</form>

<br>
<a href="userList.php">Back</a>

</body>
</html>