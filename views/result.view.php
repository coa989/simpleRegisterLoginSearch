<?php 
session_start();
include 'partials/header.php';
if(!empty($_SESSION['result'])): 
?>
		<?php foreach($_SESSION['result'] as $user): ?>
	<ul>
		<li><a href="../show.php?id=<?= $user->id ?>"><?= $user->username; ?></a></li>
	</ul>
			<?php endforeach; ?>

<?php else: ?>
	<h5 class="card-title text-center mt-3">No users found!</h5>
<?php 
endif;
include 'partials/footer.php'; 
?>
