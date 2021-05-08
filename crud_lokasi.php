<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_lapor');

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


function create($data)
{
    global $conn;
    $kode_lokasi = $data["kode_lokasi"];
    $nama_lokasi = $data["nama_lokasi"];
    $catatan = $data["catatan"];

    $query = "INSERT INTO tb_lokasi VALUES ('','$kode_lokasi', '$nama_lokasi', '$catatan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function delete($id)
{

    global $conn;
    $query = "DELETE FROM tb_lokasi WHERE id='$id'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function update($data)
{

    global $conn;
    $id = $data["id"];
    $kode_lokasi = $data["kode_lokasi"];
    $nama_lokasi = $data["nama_lokasi"];
    $catatan = $data["catatan"];

    $query = "UPDATE tb_lokasi SET 
            kode_lokasi = '$kode_lokasi',
            nama_lokasi = '$nama_lokasi',
            catatan = '$catatan'
            WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
