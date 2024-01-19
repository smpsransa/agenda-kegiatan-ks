<?php require_once("../connection.php") ?>

<fieldset>
    <legend>rekam Surat Keluar (SK)</legend>
    <table>
        <thead>
            <th>no</th>
            <th>Kode Surat</th>
            <th>Tanggal Surat</th>
            <th>Dikirim Kepada</th>
            <th>Isi Ringkasan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM statement_out sout INNER JOIN statement_code scode on sout.code_id = scode.id ORDER BY date;";
            $query = mysqli_query($db, $sql);
            $index = 1;
            
            while ($data = mysqli_fetch_array($query)) {
                echo ("<tr>");
                // column data
                echo ("<td>" . $index . "</td>");
                echo ("<td>" . $data['code'] . "</td>");
                echo ("<td>" . $data['date'] . "</td>");
                echo ("<td>" . $data['sent'] . "</td>");
                echo ("<td>" . $data['about'] . "</td>");
                echo ("<td>" . $data['note'] . "</td>");
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