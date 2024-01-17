<?php
include("../../connection.php");
include("../util/uuid_generator.php");

if (isset($_POST['action_add_code'])) {
    // ambil data dari form
    $form_code = $_POST['code'];
    $form_name = $_POST['name'];
    $form_description = $_POST['description'];
    $form_more = $_POST['more'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "INSERT INTO statement_code (id, code, name, description, more) VALUE ('$UUID','$form_code', '$form_name', '$form_description', '$form_more');";
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
