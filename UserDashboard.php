
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>

<h2>Users</h2>
<a href="addUser.php" class="add-btn">Add User</a>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

<?php
include_once '../VintageVault/UserRepository.php';

$userRepo = new UserRepository();
$users = $userRepo->getAllUsers();

foreach ($users as $user) {
    echo "
    <tr>
        <td>{$user['id']}</td>
        <td>{$user['name']}</td>
        <td>{$user['email']}</td>
        <td>{$user['role']}</td>
        <td>
            <a class='action-link' href='editUser.php?id={$user['id']}'>Edit</a>
        </td>
        <td>
            <a class='action-link' href='deleteUser.php?id={$user['id']}'
               onclick=\"return confirm('Are you sure you want to delete this user?');\">
               Delete
            </a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>