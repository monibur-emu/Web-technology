<!DOCTYPE html>
<html>
<head>
    <title>Task4 C</title>
</head>
<body>

<?php $gender = ""; ?>

<form method="post">
    <input type="radio" name="gender" value="Male"
    <?php if($gender=="Male") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="Female"
    <?php if($gender=="Female") echo "checked"; ?>> Female

    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST['gender'];
    echo "<h3>Gender: " . $gender . "</h3>";
}
?>

</body>
</html>