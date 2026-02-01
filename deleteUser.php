<?php
include_once '../VintageVault/UserRepository.php';

$repo = new UserRepository();
$repo->deleteUser($_GET['id']);

header("location:UserDashboard.php");
?>