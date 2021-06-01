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

$rows = read("SELECT * FROM tb_user
                JOIN tb_laporan 
                ON tb_laporan.id_user  = tb_user.id
                JOIN tb_lokasi
                ON tb_laporan.kode_lokasi = tb_lokasi.kode_lokasi
                ");
?>


<h3>Data laporan</h3>

<a href="laporan_tambah.php"><button type="button" class="btn btn-primary btn-sm" name="tambah">Tambah data</button></a>
<table class="table table-hover ">


    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Laporan</th>
            <th scope="col">Prioritas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($rows as $row) : ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["nama_lokasi"]; ?></td>
                <td><?php echo $row["laporan"]; ?></td>
                <td><?php echo $row["prioritas"]; ?></td>
                <td>
                    <a href="laporan_ubah.php?id=<?php echo $row["id"] ?>"><button type="button" class="btn btn-success btn-sm">ubah</button></a>
                    <a href="laporan_hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><button type="button" class="btn btn-danger btn-sm">hapus</button></a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
</table>



<?php include 'template/footer.php'; ?>