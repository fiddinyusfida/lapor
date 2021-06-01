<?php 
include 'template/header.php'; 
include 'template/sidebar.php'; 
?>

<?php
require 'crud_lokasi.php';

$rows = read("SELECT * FROM tb_lokasi");
?>


<h3>Data Lokasi</h3>

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
                    <a href="lokasi_ubah.php?kode_lokasi=<?php echo $row["kode_lokasi"] ?>"><button type="button" class="btn btn-success btn-sm">ubah</button></a>
                    <a href="lokasi_hapus.php?kode_lokasi=<?php echo $row["kode_lokasi"] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><button type="button" class="btn btn-danger btn-sm">hapus</button></a>

                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
</table>



<?php include 'template/footer.php'; ?>