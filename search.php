<?php 
session_start();
require_once 'classes/User.php';
$result = (new User)->search($_GET['search']);
// var_dump($result);

if(!empty($_GET['search'])){
	$_SESSION['result'] = $result;
	header('Location: views/result.view.php');	
} 
