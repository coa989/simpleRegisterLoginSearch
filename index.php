<?php
// require_once 'vendor/autoload.php';
session_start();
if(isset($_SESSION['user_id'])){
	require_once 'classes/User.php';
	$users = (new User)->showAll();
	$_SESSION['users'] = $users;
	header('Location: /views/home.view.php');
} else {
	header('Location: /views/login.view.php');
 }

