<!DOCTYPE html>
<html>

<head>
    <title>Buku HEHE - Register Guest</title>
</head>

<body>
    <table>
        <h2 style="margin-top: 100px;">PENAMBAHAN GUEST</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('regisGuest/insert'); ?>
        <form method="post" action="<?php echo base_url('regisGuest/insert'); ?>">

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="username" value="" <?php echo set_value('username'); ?> placeholder="Nama Guest"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" value="" <?php echo set_value('password'); ?> placeholder="Password"></td>
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