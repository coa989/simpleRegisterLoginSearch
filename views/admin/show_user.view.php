<?php 
session_start();
include '../partials/header.php';
require_once '../../classes/User.php';
$user = (new User)->show($_GET['id']);
if($_SESSION['admin']):
?>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">User ID:</th>
				<th scope="col">Username:</th>
				<th scope="col">Email:</th>
				<th scope="col">Created at:</th>
				<th scope="col">Actions:</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row"><?= $user->id; ?></th>
				<td><?= $user->username; ?></td>
				<td><?= $user->email; ?></td>
				<td><?= $user->created_at; ?></td>
				<td><a href="edit_user.view.php?id=<?= $user->id ?>">
					<button class="btn btn-block btn-success">Edit</button>
				</a></td>
				<td><a href="/delete_user.php?id=<?= $user->id; ?>">
					<button class="btn btn-block btn-danger" onclick="confirm('Are you sure?');">Delete</button>
				</a></td>
			</tr>
		</tbody>
	</table>
</div>

<?php 
else:
	$_SESSION['err_msg'] = 'Forbidden';
	header('Location: ../home.view.php');
endif;
include '../partials/footer.php';
?>