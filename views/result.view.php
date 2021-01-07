<?php 
session_start();
include 'partials/header.php';
if(!empty($_SESSION['result'])): 
?>
		<?php foreach($_SESSION['result'] as $user): ?>
			<div class="container">
				<ul class="list-group">
					<li class="list-group-item"><a href="../show.php?id=<?= $user->id ?>"><?= $user->username; ?></a></li>
				</ul>
		    </div>
			<?php endforeach; ?>

<?php else: ?>
	<h5 class="card-title text-center mt-3">No users found!</h5>
<?php 
endif;
include 'partials/footer.php'; 
?>
