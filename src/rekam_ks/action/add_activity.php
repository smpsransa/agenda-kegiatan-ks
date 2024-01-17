<?php
include("../../connection.php");
include("../util/uuid_generator.php");

if (isset($_POST['action_add'])) {
    // ambil data dari form
    $form_tanggal = $_POST['tanggal'];
    $form_pukul = $_POST['pukul'];
    $form_tempat = $_POST['tempat'];
    $form_acara = $_POST['acara'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "INSERT INTO agenda (id, tanggal, pukul, tempat, acara) VALUE ('$UUID','$form_tanggal', '$form_pukul', '$form_tempat', '$form_acara');";
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
