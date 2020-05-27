<?php

require_once 'classes/User.php';
$user = (new User)->delete($_GET['id']);