<?php
include("session.php");

if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$message = "";

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
        $message = "Product added successfully.";
    } else {
        $message = "Please fill all fields.";
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];

    if (isset($_SESSION['products'][$id])) {
        $_SESSION['products'][$id]['name'] = $_POST['name'];
        $_SESSION['products'][$id]['price'] = $_POST['price'];
        $_SESSION['products'][$id]['quantity'] = $_POST['quantity'];

        $message = "Product updated successfully.";
    } else {
        $message = "Product not found.";
    }
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    if (isset($_SESSION['products'][$id])) {
        unset($_SESSION['products'][$id]);
        $message = "Product deleted successfully.";
    } else {
        $message = "Product not found.";
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
    Logged in as <b><?php echo $username; ?></b> |
    <a href="logout.php">Logout</a>
</p>

<hr>

<h3>Add / Update / Delete Product</h3>

<p><?php echo $message; ?></p>

<form method="post">
    Product ID<br>
    <input type="text" name="id"><br><br>

    Product Name<br>
    <input type="text" name="name"><br><br>

    Product Price<br>
    <input type="number" name="price"><br><br>

    Product Quantity<br>
    <input type="number" name="quantity"><br><br>

    <input type="submit" name="add" value="Add Product">
    <input type="submit" name="update" value="Update Product">
    <input type="submit" name="delete" value="Delete Product">
</form>

<hr>

<h3>Product List</h3>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>

    <?php foreach ($_SESSION['products'] as $product) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><?php echo $product['quantity']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>