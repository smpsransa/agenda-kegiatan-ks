<?php include "../connection.php";   ?>

<ul id="menu">
    <li><a href="../">kembali</a></li>
    <li><a href="form_add.php">tambah catatan kegiatan</a></li>
    <li><a href="view_agenda.php">tampilkan daftar kegiatan</a></li>
</ul>

<?php include("form_add.php"); ?>
<?php include("util/post_alert.php"); ?>
<?php include("activities.php"); ?>