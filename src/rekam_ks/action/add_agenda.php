<?php
require_once("../../connection.php");
include("../util/uuid_generator.php");

if (isset($_POST['action_add'])) {
    // ambil data dari form
    $form_tanggal = $_POST['tanggal'];
    $form_start = $_POST['start'];
    $form_end = $_POST['end'];
    $form_tempat = $_POST['tempat'];
    $form_acara = $_POST['acara'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "INSERT INTO agenda (id, tanggal, start, end, tempat, acara) VALUE ('$UUID','$form_tanggal', '$form_start', '$form_end', '$form_tempat', '$form_acara');";

    if (mysqli_query($db, $sql)) {
        // jika query berhasil disimpan
        // akan di alihkan ke halaman index.php dengan status=success
        header('Location: ../index.php?add_status=success');
    } else {
        // jika query gagal
        // akan alihkan ke halaman indek.php dengan status=failed
        header('Location: ../index.php?add_status=failed');
    }
} else {
    die("maaf terjadi kesalahan");
}
