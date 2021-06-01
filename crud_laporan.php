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


function create($data)
{
    global $conn;
    $username = $data["username"];
    $lokasi = $data["kode_lokasi"];
    $laporan = $data["laporan"];
    $prioritas = $data["prioritas"];
    $status = $data["status"];

    $date = date('Y-m-d H:i:s');
    $username = "1";

    $bukti = upload();

    if (!$bukti) {
        return false;
    }

    $query = "INSERT INTO tb_laporan VALUES ('','$username', '$lokasi', '$laporan', '$bukti', '$prioritas', '$date','$status')";

    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES["bukti"]["name"];
    $ukuranFile = $_FILES["bukti"]["size"];
    $error = $_FILES["bukti"]["error"];
    $tmpName = $_FILES["bukti"]["tmp_name"];

    if ($error === 4) {
        echo "
        <script>
        alert('belum ada bukti yang dipilih...');
        </script>
        ";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('bukti yang anda upload bukan gambar...');
        </script>
        ";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "
        <script>
        alert('ukuran gambar terlalu besar...');
        </script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'upload/' . $namaFileBaru);
    return $namaFileBaru;
}


function delete($id)
{

    global $conn;
    $query = "DELETE FROM tb_laporan WHERE id='$id'";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function update($data)
{

    global $conn;
    $id = $data["id"];
    $kode_lokasi = $data["kode_lokasi"];
    $laporan = $data["laporan"];
    $prioritas = $data["prioritas"];
    $status = $data["status"];
    $bukti_old = $data["bukti_old"];

    if ($_FILES['bukti']['error'] === 4) {
        $bukti = $bukti_old;
    }else{
        $bukti = upload();
    }

    $query = "UPDATE tb_laporan SET 
            kode_lokasi = '$kode_lokasi',
            laporan = '$laporan',
            bukti = '$bukti',
            prioritas = '$prioritas',
            status = '$status'
            WHERE id = '$id'            
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function createByUser($data)
{
    global $conn;
    $id = $data["id"];
    $lokasi = $data["kode_lokasi"];
    $laporan = $data["laporan"];

    $date = date('Y-m-d H:i:s');

    $bukti = upload();

    if (!$bukti) {
        return false;
    }

    $query = "INSERT INTO tb_laporan VALUES ('',$id, '$lokasi', '$laporan', '$bukti', 'x', '$date','validasi')";

    echo $query;
    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
