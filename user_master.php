<?php
require 'crud_lokasi.php';

$rows = read("SELECT * FROM tb_user");

require 'header.php';
?>


<h3>Data User</h3>

<a href="user_tambah.php"><button type="button" class="btn btn-primary btn-sm" name="tambah">Tambah data</button></a>
<table class="table table-hover ">


    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <?php $i = 1; ?>
    <?php foreach ($rows as $row) : ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $i; ?></th>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["role"]; ?></td>
                <td class="">
                    <a href="user_ubah.php?id=<?php echo $row["id"] ?>"><button type="button" class="btn btn-success btn-sm">ubah</button></a>
                    <a href="user_hapus.php?id=<?php echo $row["id"] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><button type="button" class="btn btn-danger btn-sm">hapus</button></a>

                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
</table>



<?php require 'footer.php'; ?>