<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

include 'template/header.php'; 
include 'template/sidebar.php'; 
?>

<?php

require 'crud_lokasi.php';

$kode_lokasi = $_GET["kode_lokasi"];
$rows = read("SELECT * FROM tb_lokasi WHERE kode_lokasi='$kode_lokasi'");

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


<h3>Form ubah lokasi</h3>
<form class="form-group" action="" method="POST">
    <?php foreach ($rows as $row) : ?>
        <input type="hidden" class="form-control" value="<?php echo $row["kode_lokasi"] ?>" id="kode_lokasi_old" name="kode_lokasi_old">
        <div class="col-md-6">
            <label for="kode_lokasi" class="form-label">Kode lokasi</label>
            <input type="text" class="form-control" value="<?php echo $row["kode_lokasi"] ?>" id="kode_lokasi" name="kode_lokasi" required>
        </div>
        <div class="col-md-6">
            <label for="nama_lokasi" class="form-label">Nama lokasi</label>
            <input type="text" class="form-control" value="<?php echo $row["nama_lokasi"] ?>" id="nama_lokasi" name="nama_lokasi" required>
        </div>
        <div class="col-md-6">
            <label for="catatan" class="form-label">Catatan</label>
            <input type="text" class="form-control" value="<?php echo $row["catatan"] ?>" id="catatan" name="catatan" required>
        </div>
        <div class="col-md-6 mt-4">
            <button type="submit" class="btn btn-sm btn-primary" name="update">Simpan</button>
        </div>
    <?php endforeach; ?>
</form>

<?php include 'template/footer.php'; ?>