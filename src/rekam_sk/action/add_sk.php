<?php
include("../../connection.php");
include("../util/uuid_generator.php");

if (isset($_POST['action_add'])) {
    // ambil data dari form
    $form_code_id = $_POST['code_id'];
    $form_date = $_POST['date'];
    $form_sent = $_POST['to'];
    $form_about = $_POST['about'];
    $form_note = $_POST['note'];


    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "INSERT INTO statement_out (id, code_id, date, sent, about, note) VALUES ('$UUID','$form_code_id', '$form_date', '$form_sent', '$form_about', '$form_note');";
    $query = mysqli_query($db, $sql);

    if (!$query) {
        // jika query gagal
        // akan alihkan ke halaman indek.php dengan status=failed
        header('Location: ../index.php?status=failed');
    }

    // jika query berhasil disimpan
    // akan di alihkan ke halaman index.php dengan status=success
    header('Location: ../index.php?status=success');
} else {
    die("maaf terjadi kesalahan");
}
