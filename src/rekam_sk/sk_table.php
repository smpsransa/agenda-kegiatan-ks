<?php require_once("../connection.php") ?>
<?php $env = parse_ini_file('../.env') ?>
<fieldset>
    <legend>rekam Surat Keluar (SK)</legend>
    <table>
        <thead>
            <th>No Urut</th>
            <th>Kode Surat</th>
            <th>Tanggal Surat</th>
            <th>Dikirim Kepada</th>
            <th>Isi Ringkasan</th>
            <th>Keterangan</th>
            <th>Nomor SK</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM statement_out sout INNER JOIN statement_code scode on sout.code_id = scode.id ORDER BY date;";
            $query = mysqli_query($db, $sql);

            $index = 1;

            while ($data = mysqli_fetch_array($query)) {
                $no_urut = $index + $env['SK_EKOR_URUT'];
                echo ("<tr>");
                // column data
                echo ("<td>" . $no_urut . "</td>");
                echo ("<td>" . $data['code'] . "</td>");
                echo ("<td>" . $data['date'] . "</td>");
                echo ("<td>" . $data['sent'] . "</td>");
                echo ("<td>" . $data['about'] . "</td>");
                echo ("<td>" . $data['note'] . "</td>");
                echo ("<td>" . "<input disabled id='$no_urut' size=13 style='text-align:end;' value='$data[code]/$no_urut/$env[SK_KODE_SEKOLAH]'></input><button onclick='copy($no_urut)'>salin</button></td>");
                echo ("<td>");
                echo ("<a href='./sk_edit.php?id=" . $data[0] . "'>sunting</a> | ");
                echo ("<a href='./action/del_sk.php?id=" . $data[0] . "'>hapus</a>");
                echo ("</td>");
                echo ("</tr>");
                $index++;
            }
            ?>
        </tbody>
    </table>
</fieldset>
<script>
    function copy(no_urut) {
        var no_sk = document.getElementById(no_urut);
        no_sk.select();
        no_sk.setSelectionRange(0, 99999); // For mobile devices
        navigator.clipboard.writeText(no_sk.value);
    }
</script>