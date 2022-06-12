<h1 style="margin-top: 100px;">Tambah Gambar</h1>
<hr>

<div style="color:red;"><?php echo (isset($message)) ? $message : ""; ?></div>

<?php echo form_open("gambar/tambah", array('enctype' => 'multipart/form-data')); ?>
<table cellpadding="8">
    <tr>
        <td>Deskripsi</td>

        <td><input type="text" name="input_deskripsi" value="<?php echo set_value('input_deskripsi'); ?>"></td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td><input type="file" name="input_gambar"></td>
    </tr>
</table>
<hr>
<input type="submit" name="submit" value="Simpan">
<a href="<?php echo base_url() ?>Gambar"><input type="button" value="Batal"></a>
<?php echo form_close(); ?>