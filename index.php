<?php

require 'crud_lokasi.php';

$rows = read("SELECT * FROM tb_lokasi");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Master Lokasi</title>
</head>

<body class="bg-light">
    <!-- navbar  -->
    <?php include 'navbar.php' ?>
    <!-- navbar end  -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-2">
                <?php require 'sidebar.php' ?>
            </div>
            <div class="col-md-9">
                <h3>Master Data Lokasi</h3>
                <br>
                <a href="lokasi_tambah.php"><button type="button" class="btn btn-primary btn-sm" name="tambah">Tambah data</button></a>
                <table class="table table-hover ">

                    
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Lokasi</th>
                            <th scope="col">Nama Lokasi</th>
                            <th scope="col">Catatan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($rows as $row) : ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row["kode_lokasi"]; ?></td>
                                <td><?php echo $row["nama_lokasi"]; ?></td>
                                <td><?php echo $row["catatan"]; ?></td>
                                <td class="">
                                    <a href="lokasi_ubah.php?id=<?php echo $row["id"] ?>"><button type="button" class="btn btn-success btn-sm">ubah</button></a>
                                    <a href="lokasi_hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><button type="button" class="btn btn-danger btn-sm">hapus</button></a>

                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>





    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/custom.js"></script>
</body>

</html>