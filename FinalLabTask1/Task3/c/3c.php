<!DOCTYPE html>
<html>
<head>
    <title>Task3 C</title>
</head>
<body>

<?php $dob = ""; ?>

<form method="post">
    DOB: <input type="date" name="dob" value="<?php echo $dob; ?>">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['dob'];
    echo "<h3>DOB: " . $dob . "</h3>";
}
?>

</body>
</html>