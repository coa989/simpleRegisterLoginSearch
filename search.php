<?php 
require_once 'database/User.php';
$user = new User;
$user->searchUser($_GET['search']);