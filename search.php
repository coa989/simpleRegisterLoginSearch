<?php 
session_start();
require_once 'database/User.php';
$user = new User;
$result = $user->searchUser($_GET['search']);
if(!empty($_GET['search']))
{
	$_SESSION['result'] = $result;
	header('Location: views/result.view.php');
} else
	{
		$_SESSION['err_msg'] = 'You must enter at least 1 character.';
		header('Location: views/home.view.php');
	}
