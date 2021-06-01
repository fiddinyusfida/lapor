<?php
include 'template/header.php';
include 'template/sidebar_user.php';
?>

<?php

require 'crud_profil.php';

$rows = read("SELECT tb_laporan.id, kode_lokasi, laporan, prioritas, waktu, status FROM tb_user
                JOIN tb_laporan
                ON tb_laporan.id_user  = tb_user.id WHERE username='fiddin1'
                ");

?>

<h3>Laporan</h3>

<table class="table table-hover text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Invoice Laporan</th>
            <th scope="col">Kode Lokasi</th>
            <th scope="col">Laporan</th>
            <th scope="col">Tanggal Pengajuan</th>
            <th scope="col">Status Laporan</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($rows as $row) : ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td ><?php echo $row["id"]; ?></td>
                <td><?php echo $row["kode_lokasi"]; ?></td>
                <td><?php echo $row["laporan"]; ?></td>
                <td><?php echo $row["waktu"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
</table>