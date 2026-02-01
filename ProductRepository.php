<?php
include_once '../VintageVault/ProductDatabaseConection.php';
include_once '../VintageVault/IProductRepository.php';

class ProductRepository implements IProductRepository
{
    private $connection;

    function __construct()
    {
        $conn = new ProductDatabaseConection();
        $this->connection = $conn->startConnection();
    }

    public function insertProduct($product)
    {
        $conn = $this->connection;

        $sql = "INSERT INTO products (name, description, price)
                VALUES (?,?,?)";

        $statement = $conn->prepare($sql);
        $statement->execute([
            $product->getName(),
            $product->getDescription(),
            $product->getPrice()
        ]);
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        return $this->connection->query($sql)->fetchAll();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch();
    }

    public function updateProduct($id, $name, $description, $price)
    {
        $sql = "UPDATE products
                SET name=?, description=?, price=?
                WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$name, $description, $price, $id]);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
    }
}