<?php 
session_start();
require_once 'classes/User.php';
$user = new User;
$edit = $user->show($_GET['id']);
$_SESSION['user'] = $edit; 
header('Location: views/edit.view.php');
 ?>