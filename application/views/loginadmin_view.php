<!DOCTYPE html>

<html>

<head>

    <title>Login</title>

</head>

<body>

    <h1 style="margin-top: 100px;">HALAMAN LOGIN ADMIN</h1>
    <!-- menampilkan isi validasi -->
    <?php echo validation_errors(); ?>
    <!-- menampilkan isi validasi -->
    <form action="<?php echo base_url('loginadmin/login_action'); ?>" method="post">

        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Login"></td>
            </tr>

        </table>
    </form>
</body>

</html>