<?php
require 'crud_user.php';

if (isset($_POST["create"])) {

    if (create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            // document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

require 'header.php';
?>

<h3>Form tambah user</h3>

<form class="form-group" action="" method="POST">

    <div class="col-md-6">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="col-md-6">
        <label for="password2" class="form-label">Ketik Ulang Password</label>
        <input type="password" class="form-control" id="password2" name="password2" required>
    </div>
    <div class="col-md-6">
        <label for="role" class="form-label">Role</label>
        <select class="form-select" aria-label="Default select example" name="role">
            <option selected>--Pilih role--</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div>
    <div class="col-md-6 mt-4">
        <button type="submit" class="btn btn-sm btn-primary" name="create">Simpan</button>
    </div>
</form>


<?php require 'footer.php'; ?>