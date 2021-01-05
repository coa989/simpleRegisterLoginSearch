<?php 
session_start();
include 'partials/header.php'; 
?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card-body">
                <h5 class="card-title text-center">Edit Account</h5>
                <form action="../update.php" method="post">
                    <div class="form-label-group">
                        <input class="form-control" type="text" name="id" placeholder="Id" value="<?= $_SESSION['user']->id; ?>">
                    </div>
                    <div class="form-label-group">
                        <input class="form-control" type="text" name="username" placeholder="Username" value="<?= $_SESSION['user']->username; ?>">
                    </div>
                    <div class="form-label-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" value="<?= $_SESSION['user']->email; ?>">
                    </div>
                    <div class="form-label-group">
                        <input class="form-control" type="pass" name="password" placeholder="Password" value="<?= $_SESSION['user']->password; ?>">
                    </div>
                    <div class="form-label-group">
                        <input class="form-control" type="role" name="role" placeholder="Role" value="<?= $_SESSION['user']->role; ?>">
                    </div>
                    <div class="form-label-group">
                        <input class="form-control" type="created_at" name="created_at" placeholder="Created At" value="<?= $_SESSION['user']->created_at; ?>">
                    </div>
                    <button class="btn btn-dark btn-block text-uppercase" type="submit">Edit</button>
                    <hr class="my-4">
                </form>
            </div>
        </div>
    </div>
</div>
    
<?php 
include 'partials/footer.php';
?>
