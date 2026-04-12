<!DOCTYPE html>
<html>
<head>
    <title>Task5 B</title>
</head>
<body>

<form method="post">
    Degree:
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach($_POST['degree'] as $d){
        echo $d . " ";
    }
}
?>

</body>
</html>