<?php require_once("../connection.php") ?>

<form action="./action/add_sk.php" method="POST">
    <fieldset>
        <legend>form penulisan Surat Keluar</legend>
        <fieldset>
            <legend>Kode Per-Suratan</legend>
            <label for="code_id">Kode:</label>
            <select name="code_id" id="code_id">
                <option value="">pilih kode</option>
                <?php
                $sql = "SELECT * FROM statement_code;";
                $query = mysqli_query($db, $sql);
                $index = 1;
                while ($option = mysqli_fetch_array($query)) {
                    echo ('<option value="' . $option['id'] . '">' . $option['code'] . ': ' . $option['name'] . '</option>');
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
                <input type="date" id="date" name="date" />
            </div>
            <div id="input_to">
                <label for="to">Dikirim Kepada</label><br />
                <input type="text" id="to" name="to" />
            </div>
            <div id="input_about">
                <label for="about">Isi Ringkasan</label><br />
                <textarea id="about" name="about"></textarea>
            </div>
            <div id="input_note">
                <label for="note">Keterangan</label><br />
                <textarea id="note" name="note"></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_add">kirim</button>
        <input type="reset" onclick="reset_code_detail()" />
    </fieldset>
</form>

<script type="text/javascript">
    function reset_code_detail() {
        $('#code_description').html("......");
        $('#code_detail').html("......");
    }

    $('#code_id').change(function() {
        if ($('#code_id').val()) {
            $.post('action/ajax_code.php', {
                code_id: $(this).val()
            }, (response) => {
                const [description, detail] = $.parseJSON(response);
                $('#code_description').html(description);
                $('#code_detail').html(detail);
            })
        } else {
            reset_code_detail();
        }
    });
</script>