<!DOCTYPE html>

<html>

<head>

    <title>Login - Guest</title>

</head>

<body>

    <h1 style="margin-top: 100px;">Login Guest berhasil!</h1>

    <h2>Hai, <?php echo $this->session->userdata("nama"); ?>
    </h2> <a href="<?php echo base_url('loginGuest/logout'); ?>">Logout</a>

</body>

</html>