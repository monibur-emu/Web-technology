<?php
include("../asset/session.php");

$username = $_GET['username'];

if (isset($_SESSION['users'][$username])) {
    unset($_SESSION['users'][$username]);
}

header("Location: ../view/userList.php");
exit();
?>