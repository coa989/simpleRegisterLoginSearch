<?php 
session_start();
include 'partials/header.php';
if(!empty($_SESSION['result'])): 
?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Results:</h5>
				<?php foreach ($_SESSION['result'] as $user): ?>
					<ul class="list-group">
						<?php if($_SESSION['admin']): ?>
						<li class="list-group-item">
							<a href="admin/show_user.view.php?id=<?= $user->id; ?>"><?= $user->username; ?></a>
						</li>
						<?php else: ?>
						<li class="list-group-item">
							<?= $user->username; ?>
						</li>
						<?php endif; ?>
					</ul>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<?php else: ?>
	<h5 class="card-title text-center mt-3">No users found!</h5>
<?php 
endif;
unset($_SESSION['err_msg']);
include 'partials/footer.php'; 
?>
