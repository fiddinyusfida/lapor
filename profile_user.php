<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'template/header.php';
include 'template/sidebar_user.php';
?>

<?php

require 'crud_profil.php';

// $id = $_GET["id"];
$rows = read("SELECT tb_profil.id, username, nama, alamat, no_hp FROM tb_user
                JOIN tb_profil 
                ON tb_profil.id_user  = tb_user.id WHERE username='fiddinisadmin'
                ");

if (isset($_POST["update"])) {

    if (update($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            // document.location.href = 'index.php';
        </script>
        ";
    }
}
?>


<h3>Profil</h3>
<form class="form-group" action="" method="POST">
    <?php foreach ($rows as $row) : ?>
        <input type="hidden" class="form-control" value="<?php echo $row["id"] ?>" id="id" name="id">
        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" value="<?php echo $row["username"] ?>" id="username" name="username" required disabled>
        </div>
        <div class="col-md-6">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" value="<?php echo $row["nama"] ?>" id="nama" name="nama" required>
        </div>
        <div class="col-md-6">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" value="<?php echo $row["alamat"] ?>" id="alamat" name="alamat" required>
        </div>
        <div class="col-md-6">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" value="<?php echo $row["no_hp"] ?>" id="no_hp" name="no_hp" required>
        </div>
        <div class="col-md-6 mt-4">
            <button type="submit" class="btn btn-sm btn-primary" name="update">Simpan</button>
        </div>
    <?php endforeach; ?>
</form>

<?php include 'template/footer.php'; ?>