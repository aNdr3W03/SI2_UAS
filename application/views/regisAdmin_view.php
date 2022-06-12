<!DOCTYPE html>
<html>

<head>
    <title>Register Admin - Buku HEHE</title>
</head>

<body>
    <table>
        <?php echo validation_errors(); ?>
        <?php echo form_open('regisAdmin/insert'); ?>
        <form method="post" action="<?php echo base_url('regisAdmin/insert'); ?>">
            PENAMBAHAN ADMIN
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="username" value="" <?php echo set_value('username'); ?> placeholder="Nama Admin"></td>
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