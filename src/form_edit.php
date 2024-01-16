<?php
include("connection.php");

if (!isset($_GET['id'])) {
    // jika tidak ada ID, akan langsung dilempar ke halaman utama
    header('Location: activities.php');
}

// ambil id dari parameter id
$data_id = $_GET['id'];

// buat query berdasarkan id
$sql = "SELECT * FROM agenda WHERE id='$data_id';";
$query = mysqli_query($db, $sql);

$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<form action="action/edit_activity.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <fieldset>
        <legend>sunting agenda ks</legend>
        <fieldset>
            <legend>waktu</legend>
            <div id="input_tanggal">
                <label for="tanggal">Tanggal</label><br />
                <input type="date" id="tanggal" name="tanggal" value="<?php echo $data['tanggal'] ?>" />
            </div>
            <div id="input_pukul">
                <label for="pukul">Pukul</label><br />
                <input type="time" id="pukul" name="pukul" value="<?php echo $data['pukul'] ?>" />
            </div>
        </fieldset>
        <fieldset>
            <legend>keterangan</legend>
            <div id="input_tempat">
                <label for="tempat">Tempat</label><br />
                <input type="text" id="tempat" name="tempat" placeholder="yogyakarta, taman nasional Gn. Merapi" value="<?php echo $data['tempat'] ?>" />
            </div>
            <div id="input_acara">
                <label for="pukul">Acara</label><br />
                <textarea type="text" id="acara" name="acara" placeholder="contoh: diklat ruang publik lestari"><?php echo $data['acara'] ?></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_edit">perbarui</button>
    </fieldset>
</form>