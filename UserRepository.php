<?php
include_once '../VintageVault/UserDatabaseConection.php';
include_once '../VintageVault/IUserRepository.php';

class UserRepository implements IUserRepository {

    private $connection;

    function __construct() {
        $conn = new UserDatabaseConection();
        $this->connection = $conn->startConnection();
    }

    public function insertUser($user) {
        $sql = "INSERT INTO user (name, email, password, role)
                VALUES (?,?,?,?)";

        $statement = $this->connection->prepare($sql);
        $statement->execute([
            $user->getName(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getRole()
        ]);
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM user";
        return $this->connection->query($sql)->fetchAll();
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM user WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
        return $statement->fetch();
    }

    public function updateUser($id, $name, $email, $password, $role) {
        $sql = "UPDATE user
                SET name=?, email=?, password=?, role=?
                WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$name, $email, $password, $role, $id]);
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM user WHERE id=?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);
    }
}
?>