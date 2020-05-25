<?php
session_start();
require 'classes/Auth.php';
$auth = new Auth;

$auth->validateRegister($_POST);





