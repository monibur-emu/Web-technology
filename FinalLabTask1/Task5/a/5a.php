<?php
foreach($_POST['degree'] as $d){
    echo $d . " ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task5 A - Degree</title>
</head>
<body>

<form action="5a.php" method="post">
    Degree:
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="submit">
</form>

</body>
</html>