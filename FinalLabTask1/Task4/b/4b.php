<!DOCTYPE html>
<html>
<head>
    <title>Task4 B</title>
</head>
<body>

<form method="post">
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Gender: " . $_POST['gender'] . "</h3>";
}
?>

</body>
</html>