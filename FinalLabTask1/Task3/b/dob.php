<!DOCTYPE html>
<html>
<head>
    <title>Task3 B</title>
</head>
<body>

<form method="post">
    DOB: <input type="date" name="dob">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>DOB: " . $_POST['dob'] . "</h3>";
}
?>

</body>
</html>