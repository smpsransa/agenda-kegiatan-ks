<?php
include("../../connection.php");

if (isset($_POST['action_edit'])) {
    // ambil data dari form
    $data_id = $_POST['id'];
    $data_tanggal = $_POST['tanggal'];
    $data_pukul = $_POST['pukul'];
    $data_tempat = $_POST['tempat'];
    $data_acara = $_POST['acara'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "UPDATE agenda SET tanggal='$data_tanggal', pukul='$data_pukul', tempat='$data_tempat', acara='$data_acara' WHERE id='$data_id';";
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
