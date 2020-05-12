<?php 
session_start();
include 'partials/header.php';
if(!empty($_SESSION['result'])): 
?>
<table class="table">
	<thead>
		<tr>
			<th scope="col">User ID:</th>
			<th scope="col">Username:</th>
			<th scope="col">Email:</th>
			<th scope="col">Created at:</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($_SESSION['result'] as $user): ?>
		<tr>
			<th scope="row"><?= $user->id; ?></th>
			<td><?= $user->username; ?></td>
			<td><?= $user->email; ?></td>
			<td><?= $user->created_at; ?></td>
		</tr>
			<?php endforeach; ?>
	</tbody>
</table>
<?php else: ?>
	<h5 class="card-title text-center mt-3">No users found!</h5>
<?php 
endif;
include 'partials/footer.php'; 
?>
