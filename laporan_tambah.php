<?php
require 'crud_laporan.php';

$rows = read("SELECT kode_lokasi, nama_lokasi FROM tb_lokasi");

if (isset($_POST["create"])) {

    if (create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            // document.location.href = 'laporan_master.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            // document.location.href = 'laporan_master.php';
        </script>
        ";
    }
}

require 'header.php';
?>

<h3>Form tambah laporan</h3>

<form class="form-group" action="" method="POST">
    <div class="col-md-6">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
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
        <input type="text" class="form-control" id="laporan" name="laporan" required>
    </div>
    <div class="col-md-6">
        <label for="bukti" class="form-label">Bukti</label>
        <input type="text" class="form-control" id="bukti" name="bukti" required>
    </div>
    <div class="col-md-6">
        <label for="prioritas" class="form-label">Prioritas</label>
        <input type="text" class="form-control" id="prioritas" name="prioritas" required>
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" required>
    </div>
    <div class="col-md-6 mt-4">
        <button type="submit" class="btn btn-sm btn-primary" name="create">Simpan</button>
    </div> 
</form>


<?php require 'footer.php'; ?>