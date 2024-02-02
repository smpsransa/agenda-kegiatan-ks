<?php require_once("../connection.php") ?>

<?php $meta_title = "Screen Agenda KS" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<h1 class="title">Agenda KS <?php echo (new DateTime)->format("Y") ?> </h1>
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
            echo ("<td class='fit'>" . $index . "</td>");
            echo ("<td class='fit'>" . $activities['tanggal'] . "</td>");
            echo ("<td class='fit'>" .  date('H:i', strtotime($activities['start'])) . "-" . date('H:i', strtotime($activities['end']))  . "</td>");
            echo ("<td class='stretch'>" . $activities['tempat'] . "</td>");
            echo ("<td class='stretch'>" . $activities['acara'] . "</td>");
            echo ("</tr>");
            $index++;
        } ?>
    </tbody>
</table>
<style>
    .title {
        padding-bottom: 10px;
        font-weight: bold;
        text-align: center;
        color: white;
    }

    body {
        background-color: black;
    }

    table {
        font-size: 1.8rem;
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        vertical-align: top;
        color: white;
        text-align: left;
        padding: 8px;
        border: 1px solid whitesmoke;
    }

    td:first-child {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #363636;
    }

    th {
        text-transform: uppercase;
        background-color: slategray;
        color: white;
    }

    td.stretch {
        max-width: 0;
        word-wrap: break-word;
    }

    td.fit {
        width: 0;
        min-width: fit-content;
        white-space: nowrap;

    }
</style>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>