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
        <a href="<?= ($_SESSION['role'] == 'admin') ? 'admin.view.php' : 'result.view.php' ?>"><button type="button" class="btn btn-secondary">Back</button></a>
        <tr>
            <th scope="row"><?= $_SESSION['user']->id; ?></th>
            <td><?= $_SESSION['user']->username; ?></td>
            <td><?= $_SESSION['user']->email; ?></td>
            <td><?= $_SESSION['user']->created_at; ?></td>
        </tr>
    </tbody>
</table>
<?php
include 'partials/footer.php';