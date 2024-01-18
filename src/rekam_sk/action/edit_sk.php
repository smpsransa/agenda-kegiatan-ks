<?php
include("../../connection.php");

if (isset($_POST['action_edit'])) {
    // ambil data dari form
    $data_id = $_POST['id'];
    $data_code_id = $_POST['code_id'];
    $data_date = $_POST['date'];
    $data_sent = $_POST['to'];
    $data_about = $_POST['about'];
    $data_note = $_POST['note'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "UPDATE statement_out SET code_id='$data_code_id', date='$data_date', sent='$data_sent', about='$data_about' , note= '$data_note' WHERE id='$data_id';";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        // jika query gagal
        // akan alihkan ke halaman indek.php dengan status=failed
        header('Location: ../index.php?edit_status=failed');
    }

    // jika query berhasil disimpan
    // akan di alihkan ke halaman index.php dengan status=success
    header('Location: ../index.php?edit_status=success');
} else {
    die("maaf terjadi kesalahan");
}
