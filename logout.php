<?php 
require_once 'classes/Auth.php';
$user = (new Auth)->logout();
header('Location: /index.php');
?>