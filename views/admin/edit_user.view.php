<?php 
session_start();	
include '../partials/header.php'; 
require_once '../../classes/User.php';

if($_SESSION['admin']):
	$user = (new User)->show($_GET['id']);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Edit User</h5>
				<form action="/edit_user.php" method="post">
					<div class="form-label-group">
						<label for="username">ID:</label>
						<input type="text" class="form-control" name="id" value="<?= $user->id; ?>">
					</div>
					<div class="form-label-group">
						<label for="username">Admin:</label>
						<input type="text" class="form-control" name="admin" value="<?= $user->admin; ?>">
					</div>
					<div class="form-label-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" name="username" value="<?= $user->username; ?>">
					</div>
					<div class="form-label-group">
						<label for="username">Email:</label>
						<input type="text" class="form-control" name="email" value="<?= $user->email; ?>">
					</div>
					<div class="form-label-group">
						<label for="username">Password:</label>
						<input type="text" class="form-control" name="password" value="<?= $user->password; ?>">
					</div>
					<div class="form-label-group">
						<label for="username">Created at:</label>
						<input type="text" class="form-control" name="created_at" value="<?= $user->created_at; ?>">
					</div>
					<button type="submit" class="btn btn-success btn-block text-uppercase mt-2">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

else:
	header('Location: show_user.view.php');
endif;
include '../partials/footer.php';
 ?>
