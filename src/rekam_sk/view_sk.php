<?php include "../connection.php";   ?>
<?php include "../table_style.php";   ?>

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
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM statement_out ORDER BY date";
            $query = mysqli_query($db, $sql);
            $index = 1;
            while ($activities = mysqli_fetch_array($query)) {
                echo "<tr>";
                // column data
                echo "<td>" . $index . "</td>";
                echo "<td>" . $activities['code_id'] . "</td>";
                echo "<td>" . $activities['date'] . "</td>";
                echo "<td>" . $activities['to'] . "</td>";
                echo "<td>" . $activities['about'] . "</td>";
                echo "<td>" . $activities['description'] . "</td>";
                echo "</tr>";
                $index++;
            } ?>
        </tbody>
    </table>
</fieldset>