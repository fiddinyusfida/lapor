<?php include 'template/header.php' ?>

<?php 

if(isset($_POST["submit"])){
    header("location: dash_admin.php", true, 301);
    exit();
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Login akun laporUNS</h5>
            <form class="form-group mt-3" action="" method="POST">
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="col">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="col-md-6 mt-4">
                    <button type="submit" class="btn btn-sm btn-primary" name="submit">Login</button>
                </div>
            </form>
            <br>
            <p>Belum punya akun? <a href="register.php">Buat akun laporUNS</a> </p>
        </div>
    </div>
</div>