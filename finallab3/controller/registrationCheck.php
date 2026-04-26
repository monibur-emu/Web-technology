<?php
include("session.php");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($username == "" || $password == "" || $confirm == "") {
        echo "All fields required!";
    }
    elseif ($password != $confirm) {
        echo "Passwords do not match!";
    }
    elseif (isset($_SESSION['users'][$username])) {
        echo "User already exists!";
    }
    else {
        $_SESSION['users'][$username] = [
            "password" => $password
        ];

        echo "Registration successful! <br>";
        echo "<a href='login.php'>Go to Login</a>";
    }
}
?>