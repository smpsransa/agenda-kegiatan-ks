<?php require_once("../../../connection.php") ?>

<?php
if (isset($_POST['action_edit_code'])) {
    // ambil data dari form
    $data_id = $_POST['id'];
    $data_code = $_POST['code'];
    $data_name = $_POST['name'];
    $data_desc = $_POST['desc'];
    $data_more = $_POST['more'];

    // query ke database untuk menyimpan sebagai baris dengan masing-masing kolom (tanggal, pukul, tempat, agenda)
    $sql = "UPDATE statement_code SET code='$data_code', name='$data_name', description='$data_desc', more='$data_more' WHERE id='$data_id';";

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
