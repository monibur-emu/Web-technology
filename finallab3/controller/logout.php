<?php
include("../asset/session.php");

unset($_SESSION['status']);
unset($_SESSION['username']);

header("Location: ../view/login.php");
exit();
?>