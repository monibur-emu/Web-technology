<?php echo "<h3>DOB: " . $_POST['dob'] . "</h3>"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task3 A</title>
</head>
<body>

<form action="handler.php" method="post">
    DOB: <input type="date" name="dob">
    <input type="submit">
</form>

</body>
</html>