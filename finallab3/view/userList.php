<?php include("../asset/session.php"); ?>

<h2>User List</h2>

<a href="productDashboard.php">Back</a>

<table border="1">
<tr><th>User</th><th>Action</th></tr>

<?php foreach ($_SESSION['users'] as $u => $data) { ?>
<tr>
<td><?= $u ?></td>
<td>
    <a href="userDetails.php?username=<?= $u ?>">Details</a> |
    <a href="editUser.php?username=<?= $u ?>">Edit</a> |
    <a href="../controller/deleteUser.php?username=<?= $u ?>">Delete</a>
</td>
</tr>
<?php } ?>
</table>