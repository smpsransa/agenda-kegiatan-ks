<?php require_once("../../connection.php") ?>

<?php
if (isset($_POST['action_edit'])) {
    // ambil data dari form
    $data_id = $_POST['id'];
    $data_tanggal = $_POST['tanggal'];
    $data_start = $_POST['start'];
    $data_end = $_POST['end'];
    $data_tempat = $_POST['tempat'];
    $data_acara = $_POST['acara'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "UPDATE agenda SET tanggal='$data_tanggal', start='$data_start', end='$data_end', tempat='$data_tempat', acara='$data_acara' WHERE id='$data_id';";

    if (mysqli_query($db, $sql)) {
        // jika query berhasil disimpan
        // akan di alihkan ke halaman index.php dengan status=success
        header('Location: ../index.php?edit_status=success');
    } else {
        // jika query gagal
        // akan alihkan ke halaman indek.php dengan status=failed
        header('Location: ../index.php?edit_status=failed');
    }
} else {
    die("maaf terjadi kesalahan");
}
