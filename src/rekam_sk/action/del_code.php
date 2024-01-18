<?php
include("../../connection.php");

if (isset($_GET['id'])) {

    // ambil data dari url parameter
    $id = $_GET['id'];

    // query ke database untuk menghapus berdasarkan id sebagai target
    $sql = "DELETE FROM statement_code WHERE id='$id';";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        header('Location: ../code_setting.php?delete_status=failed');
    }

    header('Location: ../code_setting.php?delete_status=success');
} else {
    die("maaf terjadi kesalahan");
}
