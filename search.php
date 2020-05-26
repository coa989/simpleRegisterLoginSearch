<?php 
session_start();

if(!empty($_GET['search'])){
	$_SESSION['users'] = $users;
	header('Location: views/result.view.php');
	
} else{
		$_SESSION['err_msg'] = 'You must enter at least 1 character.';
		header('Location: views/home.view.php');
	}
