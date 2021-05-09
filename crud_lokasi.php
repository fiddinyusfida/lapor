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

    $query = "INSERT INTO tb_lokasi VALUES ('$kode_lokasi', '$nama_lokasi', '$catatan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function delete($kode_lokasi)
{

    global $conn;
    $query = "DELETE FROM tb_lokasi WHERE kode_lokasi='$kode_lokasi'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function update($data)
{

    global $conn;
    $kode_lokasi_old = $data["kode_lokasi_old"];
    $kode_lokasi = $data["kode_lokasi"];
    $nama_lokasi = $data["nama_lokasi"];
    $catatan = $data["catatan"];

    $query = "UPDATE tb_lokasi SET 
            kode_lokasi = '$kode_lokasi',
            nama_lokasi = '$nama_lokasi',
            catatan = '$catatan'
            WHERE kode_lokasi = '$kode_lokasi_old'
    ";

    echo $query;

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
