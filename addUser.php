<?php
include_once '../VintageVault/UserRepository.php';
include_once '../VintageVault/User.php';

if (isset($_POST['addBtn'])) {
    $user = new User(
        null,
        $_POST['name'],
        $_POST['email'],
        $_POST['password'],
        $_POST['role']
    );

    $repo = new UserRepository();
    $repo->insertUser($user);
    header("location:UserDashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="addUser.css">
</head>
<body>
<div class="card">
<form method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="role" placeholder="Role">
    <input type="submit" name="addBtn" value="Add User">
</form>
</div>
</body>
</html>