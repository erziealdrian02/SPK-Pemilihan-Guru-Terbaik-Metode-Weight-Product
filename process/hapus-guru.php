<?php
session_start();
include 'koneksi.php';

if (isset($_GET['guru_id'])) {
    $guru_id = $_GET['guru_id'];
    $result = mysqli_query($connect, "DELETE FROM guru WHERE guru_id = '$guru_id'");

    if ($result) {
        echo "<script>
                alert('Berhasil Menghapus Data');
                window.location.href = '../guru-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal Menghapus');</script>";
    }
} else {
    echo "<h1>NGAPAIN WOI</h1>";
}
