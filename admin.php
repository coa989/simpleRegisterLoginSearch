<?php
session_start();
require_once 'classes/User.php';
$users = new User;
// dodeljujemo $_SESSION sve usere i prebacujemo na view
$_SESSION['users'] = $users->showAll(); 
header('Location: views/admin.view.php');