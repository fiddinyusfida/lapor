<?php

require 'db_config.php';

function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function update($data)
{

    global $conn;
    $id = $data["id"];
    $username = $data["username"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $no_hp = $data["no_hp"];

    $query = "UPDATE tb_profil SET 
            username = '$username',
            nama = '$nama',
            alamat = '$alamat',
            no_hp = '$no_hp',
            WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>