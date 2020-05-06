<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quantox Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<div class="collapse navbar-collapse" id="navbarsExample07">
		  <ul class="navbar-nav mr-auto">
		    <li class="nav-item ">
		      <a class="nav-link" href="../index.php">Home</a>
		    </li>
		    <?php if(isset($_SESSION['user_id'])):?>
		    <li><a href="/logout.php" class="nav-link">Logout</a></li>
		    <form class="form-inline my-2 my-md-0" method="get" action="/search.php">
				<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
			</form>
		    <?php else: ?>
		    <li>
		    	<a class="nav-link" href="../views/login.view.php">Login</a>
		    </li>
		    <li>
		    	<a class="nav-link" href="../views/register.view.php">Register</a>
		    </li>
			<?php endif; ?>
		    
		  </ul>
		</div>
	</div>
</nav>