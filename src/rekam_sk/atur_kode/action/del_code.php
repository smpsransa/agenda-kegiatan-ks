<?php require_once("../../../connection.php") ?>

<?php
if (isset($_GET['id'])) {

    // ambil data dari url parameter
    $id = $_GET['id'];

    // query ke database untuk menghapus berdasarkan id sebagai target
    $sql = "DELETE FROM statement_code WHERE id='$id';";

    if (mysqli_query($db, $sql)) {
        header('Location: ../index.php?delete_status=success');
    } else {
        header('Location: ../index.php?delete_status=failed');
    }
} else {
    die("maaf terjadi kesalahan");
}
