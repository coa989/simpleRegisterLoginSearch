<?php 
session_start();
include 'partials/header.php'; 
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
<?php include 'partials/footer.php'; ?>
