<?php 
include 'partials/header.php'; 
session_start();
?>
<h1>Welcome <?= $_SESSION['user_name']; ?></h1>
<?php include 'partials/footer.php'; ?>