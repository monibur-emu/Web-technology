<?php
include("session.php");

if (!isset($_SESSION['status'])) {
    header("Location: login.php");
    exit();
}

$message = "";

/* ADD PRODUCT */
if (isset($_POST['add'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    if ($id != "" && $name != "" && $price != "" && $quantity != "") {
        $_SESSION['products'][$id] = [
            "id" => $id,
            "name" => $name,
            "price" => $price,
            "quantity" => $quantity
        ];
        $message = "Product added successfully!";
    } else {
        $message = "All fields required!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Dashboard</title>
</head>
<body>

<h2>Product Dashboard</h2>

<p>
    Welcome, <?php echo $_SESSION['username']; ?> |
    <a href="logout.php">Logout</a>
</p>

<hr>

<!-- ADD PRODUCT -->
<h3>Add Product</h3>

<p><?php echo $message; ?></p>

<form method="post">
    Product ID<br>
    <input type="text" name="id"><br><br>

    Name<br>
    <input type="text" name="name"><br><br>

    Price<br>
    <input type="number" name="price"><br><br>

    Quantity<br>
    <input type="number" name="quantity"><br><br>

    <input type="submit" name="add" value="Add Product">
</form>

<hr>

<!-- PRODUCT LIST -->
<h3>Product List</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    <?php
    if (!empty($_SESSION['products'])) {
        foreach ($_SESSION['products'] as $product) {
    ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
        </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='4'>No products available</td></tr>";
    }
    ?>
</table>

</body>
</html>