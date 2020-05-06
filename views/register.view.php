<?php 
session_start();
include 'partials/header.php'; 
?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Create Account</h5>
				<form action="../register.php" method="post">
			 		<div class="form-label-group">
						<input class="form-control <?=(!empty($_SESSION['data']['username_err'])) ? 'is-invalid' : ''; ?>" type="text" name="username" placeholder="Username">
						<span class="invalid-feedback"><?=(!empty($_SESSION['data']['username_err'])) ? $_SESSION['data']['username_err'] : ''; ?></span>
					</div>
					<div class="form-label-group">
						<input class="form-control <?=(!empty($_SESSION['data']['email_err'])) ? 'is-invalid' : ''; ?>" type="email" name="email" placeholder="Email">
						<span class="invalid-feedback"><?=(!empty($_SESSION['data']['email_err'])) ? $_SESSION['data']['email_err'] : ''; ?></span>
					</div>
					<div class="form-label-group">
						<input class="form-control <?=(!empty($_SESSION['data']['password_err'])) ? 'is-invalid' : ''; ?>" type="password" name="password" placeholder="Password">
						<span class="invalid-feedback"><?=(!empty($_SESSION['data']['password_err'])) ? $_SESSION['data']['password_err'] : ''; ?></span>
					</div>
					<div class="form-label-group">
						<input class="form-control <?=(!empty($_SESSION['data']['confirm_password_err'])) ? 'is-invalid' : ''; ?>" type="password" name="confirm_password" placeholder="Confirm Password">
						<span class="invalid-feedback"><?=(!empty($_SESSION['data']['confirm_password_err'])) ? $_SESSION['data']['confirm_password_err'] : ''; ?></span>
					</div>
					<button class="btn btn-dark btn-block text-uppercase" type="submit">Register</button>
					<hr class="my-4">
					<a href="login.view.php"><span class="btn btn-light btn-block">Already have account? Login</span></a>
				</form>
			</div>
		</div>
	</div>
</div>
	
<?php 
unset($_SESSION['data']);
session_destroy();
include 'partials/footer.php';
?>
