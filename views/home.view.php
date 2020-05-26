<?php 
session_start();
include 'partials/header.php'; 
if(isset($_SESSION['user_id'])):
?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Users:</h5>
				<?php foreach($_SESSION['users'] as $user): ?>
					<ul class="list-group">
						<li class="list-group-item">
							<a href="admin/show_user.php?id=<?= $user->id; ?>"><?= $user->username; ?></a>
						</li>
					</ul>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<?php 
else:
	header('Location: login.view.php');
endif;
include 'partials/footer.php'; 
?>