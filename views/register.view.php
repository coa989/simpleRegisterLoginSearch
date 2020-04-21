<?php 
session_start();
include 'partials/header.php'; 
?>
	<h1>Create acount</h1>
	<form action="../register.php" method="post">
		<div>
			<label for="username">Username:</label><br>
			<input type="text" name="username" value="<?php echo(!empty($_SESSION['data']['username'])) ? $_SESSION['data']['username'] : ''; ?>">
			<span><?php echo(!empty($_SESSION['data']['username_err'])) ? $_SESSION['data']['username_err'] : ''; ?></span>
		</div>
		<div>
			<label for="email">Email:</label><br>
			<input type="email" name="email" value="<?php echo(!empty($_SESSION['data']['email'])) ? $_SESSION['data']['email'] : ''; ?>">
			<span><?php echo(!empty($_SESSION['data']['email_err'])) ? $_SESSION['data']['email_err'] : ''; ?></span>
		</div>
		<div>
			<label for="password">Password:</label><br>
			<input type="password" name="password">
			<span><?php echo(!empty($_SESSION['data']['password_err'])) ? $_SESSION['data']['password_err'] : ''; ?></span>
		</div>
		<div>
			<label for="confirm_password">Confirm Password:</label><br>
			<input type="password" name="confirm_password">
			<span><?php echo(!empty($_SESSION['data']['confirm_password_err'])) ? $_SESSION['data']['confirm_password_err'] : ''; ?></span>
		</div>
		<div>
			<button type="submit">Create</button>
		</div>
	</form>
<?php 
unset($_SESSION['data']);
session_destroy();
include 'partials/footer.php';
?>
