<?php include 'template/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Daftar akun laporUNS</h5>
            <form class="form-group mt-3" action="" method="POST">
                <div class="col">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="col">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="col">
                    <label for="password2" class="form-label">Ketik Ulang Password</label>
                    <input type="password" class="form-control" id="password2" name="password2" required>
                </div>
                <div class="col-md-6 mt-4">
                    <button type="submit" class="btn btn-sm btn-primary" name="create">Daftar</button>
                </div>
            </form>
            <br>
            <p>Sudah punya akun? <a href="login.php">Login laporUNS</a> </p>
        </div>
    </div>
</div>