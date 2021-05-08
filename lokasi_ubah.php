<?php

require 'crud_lokasi.php';

$id = $_GET["id"];
$rows = read("SELECT * FROM tb_lokasi WHERE id='$id'");

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
            document.location.href = 'index.php';
        </script>
        ";
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Master Data Lokasi</h1>
        <br>
        <div class="row">
            <div class="col-md-6">
                <form class="form-group" action="" method="POST">
                    <?php foreach ($rows as $row) : ?>
                        <input type="hidden" class="form-control" value="<?php echo $row["id"] ?>" id="id" name="id">
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
                            <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                        </div>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>




    <src="assets /js/bootstrap.min.js">
        </src>
</body>

</html>