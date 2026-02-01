<?php
include_once '../VintageVault/UserRepository.php';

$repo = new UserRepository();
$user = $repo->getUserById($_GET['id']);

if (isset($_POST['editBtn'])) {
    $repo->updateUser(
        $user['id'],
        $_POST['name'],
        $_POST['email'],
        $_POST['password'],
        $_POST['role']
    );
    header("location:UserDashboard.php");
}
?>

<form method="post">
    <input type="text" name="name" value="<?= $user['name'] ?>">
    <input type="email" name="email" value="<?= $user['email'] ?>">
    <input type="text" name="password" value="<?= $user['password'] ?>">
    <input type="text" name="role" value="<?= $user['role'] ?>">
    <input type="submit" name="editBtn" value="Save">
</form>