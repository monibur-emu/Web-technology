<?php $name = ""; ?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo $name; ?>">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Name: " . $name;
}
?>