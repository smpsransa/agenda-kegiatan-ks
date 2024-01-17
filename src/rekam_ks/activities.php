<?php include "../connection.php";   ?>
<?php include "../table_style.php";   ?>

<fieldset>
    <legend>rekam kegiatan KS</legend>
    <table>
        <thead>
            <th>no</th>
            <th>tanggal</th>
            <th>pukul</th>
            <th>tempat</th>
            <th>agenda</th>
            <th>tindakan</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM agenda ORDER BY tanggal, pukul";
            $query = mysqli_query($db, $sql);
            $index = 1;
            while ($activities = mysqli_fetch_array($query)) {
                echo "<tr>";
                // column data
                echo "<td>" . $index . "</td>";
                echo "<td>" . $activities['tanggal'] . "</td>";
                echo "<td>" . $activities['pukul'] . "</td>";
                echo "<td>" . $activities['tempat'] . "</td>";
                echo "<td>" . $activities['acara'] . "</td>";

                // column action
                echo "<td>";
                echo "<a href='form_edit.php?id=" . $activities['id'] . "'>sunting</a> | ";
                echo "<a href='action/del_activity.php?id=" . $activities['id'] . "'>hapus</a>";
                echo "</td>";
                echo "</tr>";
                $index++;
            } ?>
        </tbody>
    </table>
</fieldset>