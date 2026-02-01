<!DOCTYPE html>
<html>
<head>
    <title>Product Dashboard</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>

<h2>Products</h2>
<a href="addProduct.php" class="add-btn">Add Product</a>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php
include_once '../VintageVault/ProductRepository.php';

$productRepo = new ProductRepository();
$products = $productRepo->getAllProducts();

foreach ($products as $product) {
    echo "
    <tr>
        <td>{$product['id']}</td>
        <td>{$product['name']}</td>
        <td>{$product['description']}</td>
        <td>{$product['price']}</td>
        <td><a href='editProduct.php?id={$product['id']}'>Edit</a></td>
        <td><a href='deleteProduct.php?id={$product['id']}'>Delete</a></td>
    </tr>";
}
?>

</table>
</body>
</html>
