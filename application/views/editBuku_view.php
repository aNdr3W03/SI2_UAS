<!DOCTYPE html>
<html>

<head>
    <title>Form Edit</title>
</head>

<body>
    <h2>MENGUBAH IDENTITAS BUKU</h2>
    <table>
        <!-- menampilkan isi validasi -->
        <?php echo validation_errors(); ?>
        <!-- menampilkan isi validasi -->
        <?php echo form_open('admin/update_data'); ?>
        <form method="post" action="<?php echo base_url('admin/update_data'); ?>">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
                    <input type="text" name="nama_buku" value="<?php echo $nama_buku; ?>">
                </td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>:</td>
                <td><input type="text" name="penulis_buku" value="<?php echo $penulis_buku; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
        </form>
    </table>

</body>

</html>