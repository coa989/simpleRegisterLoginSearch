<?php 
session_start();
include 'partials/header.php'; 
if(isset($_SESSION['user_id'])):
?>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card-body">
				<h5 class="card-title text-center">Search Users</h5>
				<form action="/search.php" method="get">
					<div class="form-label-group">
						<input type="text" name="search" class="form-control">
						<button class="btn btn-dark btn-block text-uppercase mt-1" type="submit">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
else:
	header('Location: login.view.php');
endif;
include 'partials/footer.php'; ?>