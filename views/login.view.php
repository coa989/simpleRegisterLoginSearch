<?php 
session_start();
include 'partials/header.php'; 
?>
	<h1>Sign in</h1>
	<form action="../login.php" method="post">
		<div>
			<label for="email">Email:</label><br>
			<input type="email" name="email">
		</div>
		<div>
			<label for="password">Password:</label><br>
			<input type="password" name="password">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
<?php include 'partials/footer.php'; ?>