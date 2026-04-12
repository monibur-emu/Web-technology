<!DOCTYPE html>
<html>
<head>
    <title>Task5 C</title>
</head>
<body>

<?php $degrees = []; ?>

<form method="post">
    <input type="checkbox" name="degree[]" value="SSC"
    <?php if(in_array("SSC",$degrees)) echo "checked"; ?>> SSC

    <input type="checkbox" name="degree[]" value="HSC"
    <?php if(in_array("HSC",$degrees)) echo "checked"; ?>> HSC

    <input type="checkbox" name="degree[]" value="BSc"
    <?php if(in_array("BSc",$degrees)) echo "checked"; ?>> BSc

    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $degrees = $_POST['degree'];
    foreach($degrees as $d){
        echo $d . " ";
    }
}
?>

</body>
</html>