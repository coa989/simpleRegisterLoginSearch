<?php 
session_start();
include 'partials/header.php'; 
if(isset($_SESSION['user_id'])):
?>
<h3 class="text-center">Welcome <?= $_SESSION['user_name']; ?>!</h3>
<?php 
else:
	header('Location: login.view.php');
endif;
include 'partials/footer.php'; ?>