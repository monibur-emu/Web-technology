<?php
include("session.php");

if (!isset($_SESSION['status'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>

<h2>User List</h2>

<p>
    <a href="productDashboard.php">Back to Dashboard</a> |
    <a href="logout.php">Logout</a>
</p>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Username</th>
        <th>Actions</th>
    </tr>

    <?php
    foreach ($_SESSION['users'] as $username => $user) {
    ?>
        <tr>
            <td><?php echo $username; ?></td>
            <td>
                <a href="userDetails.php?username=<?php echo $username; ?>">Details</a> |
                <a href="editUser.php?username=<?php echo $username; ?>">Edit</a> |
                <a href="deleteUser.php?username=<?php echo $username; ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

</body>
</html>