<!DOCTYPE html>

<html>

<head>

    <title>Login</title>

</head>

<body>

    <h1 style="margin-top: 100px;">Login Admin berhasil!</h1>

    <h2>Hai, <?php echo $this->session->userdata("nama"); ?>
    </h2> <a href="<?php echo base_url('loginadmin/logout'); ?>">Logout</a>

</body>

</html>