<?php require_once("../connection.php") ?>

<?php $meta_title = "Screen Agenda KS" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<fieldset>
    <legend>rekam kegiatan KS</legend>
    <table>
        <thead>
            <th>no</th>
            <th>tanggal</th>
            <th>pukul</th>
            <th>tempat</th>
            <th>agenda</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM agenda ORDER BY tanggal, start;";
            $query = mysqli_query($db, $sql);
            $index = 1;
            while ($activities = mysqli_fetch_array($query)) {
                echo ("<tr>");
                // column data
                echo ("<td>" . $index . "</td>");
                echo ("<td>" . $activities['tanggal'] . "</td>");
                echo ("<td>" .  date('H:i', strtotime($activities['start'])) . "-" . date('H:i', strtotime($activities['end']))  . "</td>");
                echo ("<td>" . $activities['tempat'] . "</td>");
                echo ("<td>" . $activities['acara'] . "</td>");
                echo ("</tr>");
                $index++;
            } ?>
        </tbody>
    </table>
</fieldset>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>