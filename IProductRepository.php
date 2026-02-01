<?php

interface IProductRepository
{
    public function insertProduct($product);

    public function getAllProducts();

    public function getProductById($id);

    public function updateProduct($id, $name, $description, $price);

    public function deleteProduct($id);
}
