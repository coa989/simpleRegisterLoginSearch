<?php 
session_start();
require_once 'classes/User.php';
$delete = (new User)->delete($_GET['id']);

 ?>