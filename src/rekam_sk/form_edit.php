<?php $meta_title = "Sunting Surat Keluar" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<?php
if (!isset($_GET['id'])) {
    // jika tidak ada ID, akan langsung dilempar ke halaman utama
    header('Location: activities.php');
}

// ambil id dari parameter id
$data_id = $_GET['id'];

// buat query berdasarkan id
$sql = "SELECT * FROM statement_out WHERE id='$data_id';";
$query = mysqli_query($db, $sql);

// to consume by form later
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<form action="action/edit_sk.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
    <fieldset>
        <legend>sunting Surat Keluar</legend>
        <fieldset>
            <legend>Kode Per-Suratan</legend>
            <label for="code_id">Kode:</label>
            <select name="code_id" id="code_id">
                <option value="">pilih kode</option>
                <?php
                $sql = "SELECT * FROM statement_code";
                $query = mysqli_query($db, $sql);
                $index = 1;
                while ($option = mysqli_fetch_array($query)) {
                    echo '<option value="' . $option['id'] . '"';
                    if ($data['code_id'] == $option['id']) echo 'selected';
                    echo '>' . $option['code'] . ': ' . $option['name'] . '</option>';
                    $index++;
                } ?>
            </select>
            <div>
                <label for="code_description">tentang: </label><span id="code_description">......</span>
                <br />
                <label for="code_detail">detail: </label><span id="code_detail">......</span>
            </div>
        </fieldset>
        <fieldset>
            <legend>Surat Keluar</legend>
            <div id="input_date">
                <label for="date">Tanggal Surat</label><br />
                <input type="date" id="date" name="date" value="<?php echo $data['date']?>" />
            </div>
            <div id="input_to">
                <label for="to">Dikirim Kepada</label><br />
                <input type="text" id="to" name="to" value="<?php echo $data['sent'] ?>" />
            </div>
            <div id="input_about">
                <label for="about">Isi Ringkasan</label><br />
                <textarea id="about" name="about"><?php echo $data['about'] ?></textarea>
            </div>
            <div id="input_note">
                <label for="note">Keterangan</label><br />
                <textarea id="note" name="note"><?php echo $data['about'] ?></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_edit">perbarui</button>
        <button type="reset" onclick="window.location.href='index.php'">batalkan</button>
    </fieldset>
</form>

<script type="text/javascript">
    const target = '#code_id';

    function init_behaviour() {
        if ($(target).val()) {
            $.post('action/ajax_code.php', {
                code_id: $(target).val()
            }, (response) => {
                const [description, detail] = $.parseJSON(response);
                $('#code_description').html(description);
                $('#code_detail').html(detail);
            })
        } else {
            $('#code_description').html("......");
            $('#code_detail').html("......");
        }
    }

    init_behaviour();
    $(target).change(function() {
        init_behaviour();
    });
</script>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>