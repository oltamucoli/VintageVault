<?php
class User {
    private $conn;
    private $table_name = 'user';

    public function __construct($db) {
        $this->conn = $db;
    }

    
    public function register($name, $email, $password, $confirm, $role = 'user') {
        
        if($password !== $confirm){
            return "Passwords do not match!";
        }

        $check = $this->conn->prepare("SELECT id FROM {$this->table_name} WHERE email = :email");
        $check->bindParam(':email', $email);
        $check->execute();
        if($check->rowCount() > 0){
            return "Email already registered!";
        }

       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        
        $query = "INSERT INTO {$this->table_name} (name, email, password, role) VALUES (:name, :email, :password, :role)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':role', $role);

        if($stmt->execute()){
            return true;
        }

        return "Error registering user!";
    }

    public function login($email, $password) {
        $query = "SELECT id, name, email, password, role FROM {$this->table_name} WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($password, $row['password'])){
                session_start();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role']; 
                return true;
            }
        }

        return false;
    }
}
?>
