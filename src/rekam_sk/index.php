<?php $meta_title = "Rekam Surat Keluar" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<ul id="menu">
    <li><a href="../">kembali</a></li>
    <li><a href="./atur_kode">atur Kode SK</a></li>
</ul>

<?php include_once("./sk_add.php"); ?>
<?php include_once("./util/post_alert.php"); ?>
<?php include_once("./sk_table.php"); ?>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>