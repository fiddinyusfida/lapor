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

if (isset($_POST["create"])) {

    if (create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'lokasi_master.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'lokasi_master.php';
        </script>
        ";
    }
}
?>



<h3>Form tambah lokasi</h3>

<form class="form-group" action="" method="POST">
    <div class="col-md-6">
        <label for="kode_lokasi" class="form-label">Kode lokasi</label>
        <input type="text" class="form-control" id="kode_lokasi" name="kode_lokasi" required>
    </div>
    <div class="col-md-6">
        <label for="nama_lokasi" class="form-label">Nama lokasi</label>
        <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
    </div>
    <div class="col-md-6">
        <label for="catatan" class="form-label">Catatan</label>
        <input type="text" class="form-control" id="catatan" name="catatan" required>
    </div>
    <div class="col-md-6 mt-4">
        <button type="submit" class="btn btn-sm btn-primary" name="create">Simpan</button>
    </div>
</form>


<?php include 'template/footer.php'; ?>