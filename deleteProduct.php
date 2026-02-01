<?php
include_once '../VintageVault/ProductRepository.php';

$repo = new ProductRepository();
$repo->deleteProduct($_GET['id']);

header("location:ProductDashboard.php");
?>