<?php include 'views/partials/header.php'; 
require 'vendor/autoload.php'; ?>
<div>
	<a href="views/login.view.php">Sign In</a>
</div>
<div>
	<a href="views/register.view.php">Create Account</a>
</div>
<div>
	<form action="search.php" method="get">
		<input type="text" name="search">
		<button type="submit">Search</button>
	</form>
</div>
<?php include 'views/partials/footer.php'; ?>