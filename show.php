<?php 
session_start();
require_once 'classes/User.php';
$user = new User;
$single = $user->show($_GET['id']);
$_SESSION['user'] = $single;
header('Location: views/show.view.php');

 ?>