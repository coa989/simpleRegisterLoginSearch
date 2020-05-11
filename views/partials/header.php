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
		  	<?php if(isset($_SESSION['user_id'])):?>
	         	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item">
		          		<a class="nav-link" href="/views/home.view.php">Home</a>
		        	</li>
		        	<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        					<?= $_SESSION['user_name']; ?>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				          <a class="dropdown-item" href="/logout.php">Logout</a>
				        </div>
      				</li>
      			</ul>
	       	<?php else: ?>
	          	<ul class="navbar-nav mr-auto">
	      			<li class="nav-item">
	          			<a class="nav-link" href="/views/login.view.php">Login</a>
	        		</li>
	        		<li class="nav-item">
	          			<a class="nav-link" href="/views/register.view.php">Register</a>
	      	  		</li>
         	 	</ul>
          	<?php endif; ?>
        </div>
      </div>
    </nav>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>