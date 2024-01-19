<?php require_once("../connection.php") ?>

<?php $meta_title = "Sunting Agenda KS" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<?php
if (!isset($_GET['id'])) {
    // jika tidak ada ID, akan langsung dilempar ke halaman utama
    header('Location: ./index.php');
}

// ambil id dari parameter id
$data_id = $_GET['id'];

// buat query berdasarkan id
$sql = "SELECT * FROM agenda WHERE id='$data_id';";
$query = mysqli_query($db, $sql);

// to consume by form later
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<form action="./action/edit_agenda.php" method="POST">
    <input type="hidden" name="id" value="<?php echo ($data['id']) ?>" />
    <fieldset>
        <legend>sunting agenda ks</legend>
        <fieldset>
            <legend>waktu</legend>
            <div id="input_tanggal">
                <label for="tanggal">Tanggal</label><br />
                <input type="date" id="tanggal" name="tanggal" value="<?php echo ($data['tanggal']) ?>" />
            </div>
            <fieldset>
                <legend>pukul</legend>
                <div id="input_start">
                    <label for="start">Mulai</label><br />
                    <input type="time" id="start" name="start" value="<?php echo ($data['start']) ?>" />
                </div>
                <div id="input_pukul">
                    <label for="end">Selesai</label><br />
                    <input type="time" id="end" name="end" value="<?php echo ($data['end']) ?>" />
                </div>
            </fieldset>
        </fieldset>
        <fieldset>
            <legend>keterangan</legend>
            <div id="input_tempat">
                <label for="tempat">Tempat</label><br />
                <input type="text" id="tempat" name="tempat" placeholder="yogyakarta, taman nasional Gn. Merapi" value="<?php echo ($data['tempat']) ?>" />
            </div>
            <div id="input_acara">
                <label for="pukul">Acara</label><br />
                <textarea id="acara" name="acara" placeholder="contoh: diklat ruang publik lestari"><?php echo ($data['acara']) ?></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_edit">perbarui</button>
        <button type="reset" onclick="window.location.href='./index.php'">batalkan</button>
    </fieldset>
</form>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>