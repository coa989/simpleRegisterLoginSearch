<?php
session_start();
require_once 'classes/Auth.php';
$auth = new Auth;

$auth->validateLogin($_POST);

