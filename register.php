<?php
session_start();
require 'classes/User.php';
$user = new User;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$data = [
		'username' => trim($_POST['username']),
		'email' => trim($_POST['email']),
		'password' => trim($_POST['password']),
		'username_err' => '',
		'email_err' => '',
		'password_err' => '',
		'confirm_password_err' => ''
	];
   	if(empty($_POST['username']))
   	{
   		$data['username_err'] = 'Please enter username';
   	} elseif ($user->findByUsername($_POST['username'])) 
   		{
   		$data['username_err'] = 'Username already used';
   		}
   	
	if(empty($_POST['email']))
	{
    	$data['email_err'] = 'Please enter email';
  	} elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
  		{
     		$data['email_err'] = 'Please use valid email address';
  		}else
    		{
    			if($user->findByEmail($_POST['email']))
    			{
    				$data['email_err'] = 'Email address already used';
    			}
    		}

	if(empty($_POST['password']))
	{
		$data['password_err'] = 'Please enter password';
	} elseif(strlen($_POST['password']) < 6)
		{
			$data['password_err'] = 'Password must be minimum 6 characters long';	
		}

	if(empty($_POST['confirm_password']))
	{
		$data['confirm_password_err'] = 'Please confirm password';
	} elseif($_POST['password'] != $_POST['confirm_password'])
		{
			$data['confirm_password_err'] = 'Password do not match';
		}
		
	if(empty($data['username_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err']))
	{
		$hashed_password = password_hash($data['password'], PASSWORD_DEFAULT);
		$user->register($data['username'], $data['email'], $hashed_password);	
	} else 
		{
			$_SESSION['data'] = $data;
			header('Location: views/register.view.php');
		}
} else
		{
			$data = [
				'username' => '',
				'email' => '',
				'password' => '',
				'username_err' => '',
				'email_err' => '',
				'password_err' => '',
				'confirm_password_err' => ''
			];
		}





