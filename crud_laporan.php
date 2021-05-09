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
    $username = $data["username"];
    $lokasi = $data["kode_lokasi"];
    $laporan = $data["laporan"];
    $bukti = $data["bukti"];
    $prioritas = $data["prioritas"];
    $status = $data["status"];

    $date = date('Y-m-d H:i:s');
    $username = "1";


    $query = "INSERT INTO tb_laporan VALUES ('','$username', '$lokasi', '$laporan', '$bukti', '$prioritas', '$date','$status')";

    $result = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

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
    $username = $data["username"];
    $password = $data["password"];
    $role = $data["role"];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE tb_laporan SET 
            username = '$username',
            password = '$password',
            role = '$role'
            WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
