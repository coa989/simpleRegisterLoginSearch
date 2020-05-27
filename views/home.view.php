<?php 
session_start();
include 'partials/header.php'; 
require_once '../classes/User.php';
if(isset($_SESSION['user_id'])):
	$users = (new User)->showAll();
?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Users:</h5>
				<?php foreach ($users as $user): ?>
					<ul class="list-group">
						<li class="list-group-item">
							<a href="admin/show_user.view.php?id=<?= $user->id; ?>"><?= $user->username; ?></a>
						</li>
					</ul>
				<?php endforeach; ?>
				<p><?= (isset($_SESSION['err_msg'])) ? $_SESSION['err_msg'] : ''; ?></p>
			</div>
		</div>
	</div>
</div>
<?php 
else:
	header('Location: login.view.php');
endif;
unset($_SESSION['err_msg']);
include 'partials/footer.php'; 
?>