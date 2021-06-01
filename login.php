<?php
session_start();

include 'template/header.php';
include 'db_config.php';
?>

<?php

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

    if (mysqli_num_rows($result)) {

        $rows = mysqli_fetch_assoc($result);

        if (password_verify($password, $rows["password"])) {

            $_SESSION["login"] = true;
            $_SESSION["username"] = $rows["username"];

            if ($rows["role"] == "admin") {
                header("location: dash_admin.php", true, 301);
                exit();
            } else if ($rows["role"] == "user") {
                header("location: dash_user.php", true, 301);
                exit();
            }
        }
    }

    $error = true;
}
?>

<div class="container" id="login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h5 class="text-center">Login akun LaporUNS</h5>
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
                    <button type="submit" class="btn btn-sm btn-primary" name="login">Login</button>
                </div>
            </form>
            <br>
            <p>Belum punya akun? <a href="register.php">Buat akun LaporUNS</a> </p>
        </div>
    </div>
</div>