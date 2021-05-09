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
    $password = $data["password"];
    $password2 = $data["password2"];
    $role = $data["role"];

    $query = "SELECT username FROM tb_user WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_fetch_assoc($result) > 0) {
        echo "
        <script>
        alert('username sudah digunakan');
        document.location.href = 'user_tambah.php';
        </script>
        ";
        exit;
    }

    $error = 0;
    if ($password != $password2) {
        echo "
        <script>
        alert('password tidak sesuai');
        document.location.href = 'user_tambah.php';
        </script>
        ";
        exit;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO tb_user VALUES ('','$username', '$password', '$role')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}


function delete($id)
{

    global $conn;
    $query = "DELETE FROM tb_user WHERE id='$id'";
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

    $query = "UPDATE tb_user SET 
            username = '$username',
            password = '$password',
            role = '$role'
            WHERE id = '$id'
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
