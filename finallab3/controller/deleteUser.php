<?php
include("session.php");

if (!isset($_GET['username'])) {
    echo "No user selected";
    exit();
}

$username = $_GET['username'];

if (isset($_SESSION['users'][$username])) {
    unset($_SESSION['users'][$username]);
}

header("Location: userList.php");
exit();
?>