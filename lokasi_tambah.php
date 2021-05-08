<?php

require 'crud_lokasi.php';

if (isset($_POST["create"])) {

    if (create($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
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
                        <button type="submit" class="btn btn-primary" name="create">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>