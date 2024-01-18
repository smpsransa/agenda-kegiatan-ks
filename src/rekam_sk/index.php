<?php $meta_title = "Rekam Surat Keluar" ?>
<?php include "../meta_html/common_start.php" ?>

<!-- body start -->
<ul id="menu">
    <li><a href="../">kembali</a></li>
    <li><a href="code_setting.php">atur Kode SK</a></li>
</ul>

<?php include("form_add.php"); ?>
<?php include("util/post_alert.php"); ?>
<?php include("view_sk.php"); ?>
<!-- body end -->

<?php include "../meta_html/common_end.php" ?>