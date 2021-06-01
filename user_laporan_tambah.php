<?php
session_start();
$username = $_SESSION["username"];

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

include 'template/header.php';
include 'template/sidebar_user.php';
?>

<?php
require 'crud_laporan.php';

$rows = read("SELECT kode_lokasi, nama_lokasi FROM tb_lokasi");
$rowss = read("SELECT id FROM tb_user WHERE username='$username'");

if (isset($_POST["create"])) {

    if (createByUser($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'user_laporan_tambah.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            // document.location.href = 'user_laporan_tambah.php';
        </script>
        ";
    }
}
?>

<h3>Form tambah laporan</h3>

<form class="form-group" action="" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <label for="kode_lokasi" class="form-label">Lokasi</label>
        <select class="form-select" aria-label="Default select example" name="kode_lokasi">
            <option value="">--Pilih Lokasi--</option>
            <?php foreach ($rows as $row) : ?>
                <option value="<?php echo $row["kode_lokasi"] ?>"><?php echo $row["nama_lokasi"] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="col-md-6">
        <label for="laporan" class="form-label">Laporan</label>
        <textarea class="form-control" id="laporan" name="laporan" rows="5"></textarea>
    </div>
    <div class="col-md-6">
        <label for="bukti" class="form-label">Bukti</label>
        <input type="file" class="form-control" id="bukti" name="bukti" required>
    </div>
    <div class="col-md-6">
        <?php foreach ($rowss as $row) : ?>
            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row["id"]?>" required>
        <?php endforeach ?>
    </div>

    <div class="col-md-6 mt-4">
        <button type="submit" class="btn btn-sm btn-primary" name="create">Simpan</button>
    </div>
</form>


<?php include 'template/footer.php'; ?>