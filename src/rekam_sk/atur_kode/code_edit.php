<?php require_once("../../connection.php") ?>

<?php $meta_title = "Edit Kode SK" ?>
<?php include "../../meta_html/common_start.php" ?>

<!-- body start -->
<?php
if (!isset($_GET['id'])) {
    // jika tidak ada ID, akan langsung dilempar ke halaman utama
    header('Location: ./index.php');
}

// ambil id dari parameter id
$data_id = $_GET['id'];

// buat query berdasarkan id
$sql = "SELECT * FROM statement_code WHERE id='$data_id';";
$query = mysqli_query($db, $sql);

// to consume by form later
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<form action="./action/edit_code.php" method="POST">
    <input type="hidden" name="id" value="<?php echo ($data['id']) ?>" />
    <fieldset>
        <legend>form standarisasi kode SK</legend>
        <div id="input_code">
            <label for="code">Kode</label><br />
            <input type="text" id="code" name="code" placeholder="420" value="<?php echo ($data['code']) ?>" />
        </div>
        <div id="input_name">
            <label for="name">Nama</label><br />
            <input type="text" id="name" name="name" placeholder="PENDIDIKAN" value="<?php echo ($data['name']) ?>" />
        </div>
        <div id="input_desc">
            <label for="desc">Deskripsi</label><br />
            <textarea type="text" id="desc" name="desc" placeholder="informasi mengenai kode sk"><?php echo ($data['description']) ?></textarea>
        </div>
        <div id="input_more">
            <label for="more">Tambahan</label><br />
            <textarea type="text" id="more" name="more" placeholder="informasi tambahan mengenai sk (opsional)"><?php echo ($data['more']) ?></textarea>
        </div>
        <br />
        <button type="submit" name="action_edit_code">perbarui</button>
        <button type="reset" onclick="window.location.href='./index.php'">batalkan</button>
    </fieldset>
</form>
<!-- body end -->

<?php include "../../meta_html/common_end.php" ?>