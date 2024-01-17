<?php include "../connection.php";   ?>
<?php include "../table_style.php";   ?>
<a href="tambah_kode.php">tambah kode sk</a>

<fieldset>
    <legend>daftar kode SK</legend>
    <table>
        <thead>
            <th>no</th>
            <th>Kode Surat</th>
            <th>Nama Kode</th>
            <th>Deskripsi</th>
            <th>Tambahan</th>
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
                echo "<td>" . $activities['code'] . "</td>";
                echo "<td>" . $activities['name'] . "</td>";
                echo "<td>" . $activities['description'] . "</td>";
                echo "<td>" . $activities['more'] . "</td>";
                echo "</tr>";
                $index++;
            } ?>
        </tbody>
    </table>
</fieldset>