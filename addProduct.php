<?php
include_once '../VintageVault/ProductRepository.php';
include_once '../VintageVault/Product.php';

if(isset($_POST['addBtn'])){
    $product = new Product(
        null,
        $_POST['name'],
        $_POST['description'],
        $_POST['price'],
    );

    $repo = new ProductRepository();
    $repo->insertProduct($product);
    header("location:ProductDashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>
<form method="post">
    <input type="text" name="name" placeholder="Product name"><br><br>
    <textarea name="description" placeholder="Description"></textarea><br><br>
    <input type="number" step="0.01" name="price" placeholder="Price"><br><br>
    <input type="submit" name="addBtn" value="Add Product">
</form>


