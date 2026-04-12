<?php
echo "<h3>Gender: " . $_POST['gender'] . "</h3>";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Task4 A - Gender</title>
</head>
<body>

<form action="4a.php" method="post">
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="submit">
</form>

</body>
</html>