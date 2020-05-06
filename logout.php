<?php 
require_once 'database/User.php';
$user = (new User)->logout();
header('Location: /index.php');
?>