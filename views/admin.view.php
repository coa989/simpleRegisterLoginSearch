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
            <th scope="col">Role:</th>
            <th scope="col">Created at:</th>
            <th scope="col">Action:</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($_SESSION['users'] as $user): ?>
        <tr>
            <th scope="row"><?= $user->id; ?></th>
            <td><?= $user->username; ?></td>
            <td><?= $user->email; ?></td>
            <td><?= $user->role; ?></td>
            <td><?= $user->created_at; ?></td>
            <td><div class="buttton-group" role="group" aria-label="Basic example">
                <a href="../show.php?id=<?= $user->id; ?>"><button type="button" class="btn btn-primary">Show</button></a>
                <a href="../edit.php?id=<?= $user->id; ?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
            </div></td>
        </tr>
            <?php endforeach; ?>
    </tbody>
</table>


<?php
include 'partials/footer.php';
 ?>