<?php $meta_title = "Rekam Agenda KS" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<ul id="menu">
    <li><a href="../">kembali</a></li>
    <li><a href="./view_agenda.php">Screen Agenda</a></li>
</ul>

<?php include("./agenda_add.php"); ?>
<?php include("./util/post_alert.php"); ?>
<?php include("./agenda_table.php"); ?>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>