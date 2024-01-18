<fieldset>
    <legend>daftar kode SK</legend>
    <table>
        <thead>
            <th>no</th>
            <th>Kode Surat</th>
            <th>Nama Kode</th>
            <th>Deskripsi</th>
            <th>Tambahan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM statement_code";
            $query = mysqli_query($db, $sql);
            $index = 1;
            while ($data = mysqli_fetch_array($query)) {
                echo "<tr>";
                // column data
                echo "<td>" . $index . "</td>";
                echo "<td>" . $data['code'] . "</td>";
                echo "<td>" . $data['name'] . "</td>";
                echo "<td>" . $data['description'] . "</td>";
                echo "<td>" . $data['more'] . "</td>";
                echo "<td>";
                echo "<a href='form_edit.php?id=" . $data['id'] . "'>sunting</a> | ";
                echo "<a href='action/del_code.php?id=" . $data['id'] . "'>hapus</a>";
                echo "</td>";
                echo "</tr>";
                $index++;
            } ?>
        </tbody>
    </table>
</fieldset>