<?php
include("session.php");

unset($_SESSION['status']);
unset($_SESSION['username']);
unset($_SESSION['current_user']);

header("Location: login.php");
exit();
?>