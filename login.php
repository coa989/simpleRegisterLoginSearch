<?php
session_start();
require_once 'classes/User.php';
$user = new User;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$data = [
		'email' => trim($_POST['email']),
		'password' => trim($_POST['password']),
		'email_err' => '',
		'password_err' => ''
	];
	if(empty($_POST['email']))
	{
		$data['email_err'] = 'Please enter your email';
	} else
		{
			if(!$user->findByEmail($_POST['email']))
			{
				$data['email_err'] = 'Email not found' ;
			}
		}
	if(empty($_POST['password']))
	{
		$data['password_err'] = 'Please enter your password';
	} else
		{
			if(!$user->login($_POST['email'], $_POST['password']))
			{
				$data['password_err'] = 'Incorect password.';
			}
		}
	if(empty($data['email_err']) && empty($data['password_err']))
	{
		$user->login($_POST['email'], $_POST['password']);
	} else
		{
			$_SESSION['data'] = $data;
			header('Location: views/login.view.php');
		}
} else
	{
		$data = [
			'email' => '',
			'password' => '',
			'email_err' => '',
			'password_err' => ''
		];
	}
