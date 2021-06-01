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
require 'crud_laporan.php';

$id = $_GET["id"];

$rows = read("SELECT * FROM tb_laporan WHERE id='$id'
                ");

if (isset($_POST["update"])) {

    if (update($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'laporan_master.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'laporan_master.php';
        </script>
        ";
    }
}
?>

<h3>Form ubah laporan</h3>

<form class="form-group" action="" method="POST" enctype="multipart/form-data">
    <?php foreach ($rows as $row) : ?>
        <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
        <input type="hidden" name="bukti_old" value="<?php echo $row["bukti"] ?>">

        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $row["id_user"] ?>" disabled>
        </div>
        <div class="col-md-6">
            <label for="kode_lokasi" class="form-label">Lokasi</label>
            <select class="form-select" aria-label="Default select example" name="kode_lokasi">
                <option value="">--Pilih Lokasi--</option>
                <?php
                $list = read("SELECT kode_lokasi FROM tb_lokasi");
                foreach ($list as $item) :
                ?>
                    <option value="<?php echo $item['kode_lokasi']; ?>"<?php if($item['kode_lokasi']==$row['kode_lokasi']) echo 'selected="selected"'; ?>><?php echo $item['kode_lokasi']; ?></option>
                <?php endforeach; ?>

                <!-- <option value="<?php echo $row["kode_lokasi"] ?>" selected><?php echo $row["kode_lokasi"] ?></option> -->
            </select>
        </div>
        <div class="col-md-6">
            <label for="laporan" class="form-label">Laporan</label>
            <textarea class="form-control" id="laporan" name="laporan" rows="5"><?php echo $row["laporan"] ?></textarea>
        </div>
        <div class="col-md-6">
            <label for="bukti" class="form-label">Bukti</label><br>
            <img src="upload/<?php echo $row["bukti"] ?>" width="100" alt="">
            <input type="file" class="form-control" id="bukti" name="bukti">
        </div>
        <div class="col-md-6">
            <label for="prioritas" class="form-label">Prioritas</label>
            <select class="form-select" aria-label="Default select example" name="prioritas">
                <option value="">--Pilih prioritas--</option>
                <option value="rendah" <?php if ($row["prioritas"] == "rendah") { ?> selected="selected" <?php } ?>>Rendah</option>
                <option value="sedang" <?php if ($row["prioritas"] == "sedang") { ?> selected="selected" <?php } ?>>Sedang</option>
                <option value="tinggi" <?php if ($row["prioritas"] == "tinggi") { ?> selected="selected" <?php } ?>>Tinggi</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" aria-label="Default select example" name="status">
                <option value="">--Pilih status--</option>
                <option value="validasi" <?php if ($row["status"] == "validasi") { ?> selected="selected" <?php } ?>>Validasi</option>
                <option value="eksekusi" <?php if ($row["status"] == "eksekusi") { ?> selected="selected" <?php } ?>>Eksekusi</option>
                <option value="selesai" <?php if ($row["status"] == "selesai") { ?> selected="selected" <?php } ?>>Selesai</option>
            </select>
        </div>
        <div class="col-md-6 mt-4">
            <button type="submit" class="btn btn-sm btn-primary" name="update">Simpan</button>
        </div>
    <?php endforeach; ?>
</form>


<?php include 'template/footer.php'; ?>