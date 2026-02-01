<?php
interface IUserRepository {

    public function insertUser($user);

    public function getAllUsers();

    public function getUserById($id);

    public function updateUser($id, $name, $email, $password, $role);

    public function deleteUser($id);
}
?>