<?php 
session_start();
require_once 'database/User.php';
$user = new User;
$result = $user->searchUser($_GET['search']);
$_SESSION['result'] = $result;
header('Location: views/result.view.php');

