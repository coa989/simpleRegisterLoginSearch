<?php 
require_once 'classes/User.php';
$user = (new User)->logout();
header('Location: /index.php');
?>