<?php
require 'crud_lokasi.php';

$kode_lokasi = $_GET["kode_lokasi"];

if (delete($kode_lokasi) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'lokasi_master.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href = 'lokasi_master.php';
    </script>
    ";
}
