<?php include 'template/header.php' ?>

<?php
require 'crud_user.php';

if (isset($_POST["create"])) {
    if (createUser($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'login.php';
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

?>


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Daftar akun LaporUNS</h5>
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
            <p>Sudah punya akun? <a href="login.php">Login LaporUNS</a> </p>
        </div>
    </div>
</div>