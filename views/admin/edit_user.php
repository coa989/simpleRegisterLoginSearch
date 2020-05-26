<?php 
include 'partials/header.php'; 
session_start();
if($_SESSION['admin']):
?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Edit User</h5>
				<form action="/edit.php" method="post">
					<div class="form-label-group">
						<input type="text" class="form-control" name="username" value="<?=  ?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include 
else:
	header('Location: show_user.view.php');
'partials/footer.php'; ?>
