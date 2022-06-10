<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku - Buku HEHE</title>
</head>

<body>
    <table>
        <?php echo validation_errors(); ?>
        <?php echo form_open('admin/insert'); ?>
        <form method="post" action="<?php echo base_url('admin/insert'); ?>">
            PENAMBAHAN BUKU
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" name="id_buku" placeholder="ID Buku"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama_buku" value="" <?php echo set_value('nama_buku'); ?> placeholder="Nama Buku"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis_buku" value="" <?php echo set_value('penulis_buku'); ?> placeholder="Penulis Buku"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>

</html>