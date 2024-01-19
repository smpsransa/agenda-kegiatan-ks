<!-- alert action: hapus -->
<?php if (isset($_GET['delete_status'])) : ?>
    <p style="color:red; text-align: center;">
        <?php
        if ($_GET['delete_status'] == 'success') {
            echo "SK berhasil dihapus!";
        } else {
            echo "SK gagal dihapus!";
        }
        ?>
    </p>
<?php endif; ?>

<!-- alert action: simpan -->
<?php if (isset($_GET['add_status'])) : ?>
    <p style="color:green; text-align: center;">
        <?php
        if ($_GET['add_status'] == 'success') {
            echo "SK berhasil disimpan!";
        } else {
            echo "SK gagal disimpan!";
        }
        ?>
    </p>
<?php endif; ?>

<!-- alert action: edit -->
<?php if (isset($_GET['edit_status'])) : ?>
    <p style="color:blue; text-align: center;">
        <?php
        if ($_GET['edit_status'] == 'success') {
            echo "SK berhasil diperbarui!";
        } else {
            echo "SK gagal diperbarui!";
        }
        ?>
    </p>
<?php endif; ?>