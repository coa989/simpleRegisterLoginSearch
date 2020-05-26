<?php 
session_start();
include 'partials/header.php';
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'classes/User.php'); 
$user = (new User)->show($_GET['id']);
?>

<table class="table">
	<thead>
		<tr>
			<th scope="col">User ID:</th>
			<th scope="col">Username:</th>
			<th scope="col">Email:</th>
			<th scope="col">Created at:</th>
			<?php if($_SESSION['admin']): ?>
			<th scope="col">Actions:</th>
			<?php endif; ?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row"><?= $user->id; ?></th>
			<td><?= $user->username; ?></td>
			<td><?= $user->email; ?></td>
			<td><?= $user->created_at; ?></td>
			<?php if($_SESSION['admin']): ?>
			<td><a href="edit.view.php?id=<?= $user->id ?>">
				<button class="btn btn-block btn-success">Edit</button>
			</a></td>
			<td><a href=""><button class="btn btn-block btn-danger">Delete</button></a></td>
			<?php endif; ?>
		</tr>
	</tbody>
</table>


<?php 
include 'partials/footer.php';
?>