<?php
include("../../connection.php");

if (isset($_GET['id'])) {

    // ambil data dari url parameter
    $id = $_GET['id'];

    // query ke database untuk menghapus berdasarkan id sebagai target
    $sql = "DELETE FROM agenda WHERE id='$id';";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        header('Location: ../index.php?delete_status=failed');
    }

    header('Location: ../index.php?delete_status=success');
} else {
    die("maaf terjadi kesalahan");
}
