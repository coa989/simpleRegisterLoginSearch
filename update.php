<?php 
session_start();
var_dump($_POST);
require_once 'classes/User.php';
$user = (new User)->update($_POST);

 ?>