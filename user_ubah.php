<?php include 'template/header.php'; ?>

<?php

require 'crud_user.php';

$id = $_GET["id"];
$rows = read("SELECT * FROM tb_user WHERE id='$id'");

if (isset($_POST["update"])) {

    if (update($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'user_master.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'user_master.php';
        </script>
        ";
    }
}
?>


<h3>Form ubah user</h3>
<form class="form-group" action="" method="POST">
    <?php foreach ($rows as $row) : ?>
        <input type="hidden" class="form-control" value="<?php echo $row["id"] ?>" id="id" name="id">
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" value="<?php echo $row["username"] ?>" id="username" name="username" required>
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" value="<?php echo $row["password"] ?>" id="password" name="password" required>
        </div>
        <div class="col-md-6">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>--Pilih role--</option>
                <option value="user" <?php if ($row["role"] == "user") { ?> selected="selected" <?php } ?>>User</option>
                <option value="admin" <?php if ($row["role"] == "admin") {?> selected="selected" <?php } ?>>Admin</option>
            </select>
        </div>
        <div class="col-md-6 mt-4">
            <button type="submit" class="btn btn-sm btn-primary" name="update">Simpan</button>
        </div>
    <?php endforeach; ?>
</form>

<?php include 'template/footer.php'; ?>