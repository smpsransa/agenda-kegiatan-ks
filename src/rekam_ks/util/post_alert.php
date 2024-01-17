<!-- alert action: hapus -->
<?php if (isset($_GET['delete_status'])) : ?>
    <p style="color:red; text-align: center;">
        <?php
        if ($_GET['delete_status'] == 'success') {
            echo "kegiatan berhasil dihapus!";
        } else {
            echo "kegiatan gagal dihapus!";
        }
        ?>
    </p>
<?php endif; ?>

<!-- alert action: simpan -->
<?php if (isset($_GET['status'])) : ?>
    <p style="color:green; text-align: center;">
        <?php
        if ($_GET['status'] == 'success') {
            echo "kegiatan berhasil disimpan!";
        } else {
            echo "kegiatan gagal disimpan!";
        }
        ?>
    </p>
<?php endif; ?>

<!-- alert action: edit -->
<?php if (isset($_GET['edit_status'])) : ?>
    <p style="color:blue; text-align: center;">
        <?php
        if ($_GET['edit_status'] == 'success') {
            echo "kegiatan berhasil diperbarui!";
        } else {
            echo "kegiatan gagal diperbarui!";
        }
        ?>
    </p>
<?php endif; ?>