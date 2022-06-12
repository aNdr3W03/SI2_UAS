<!DOCTYPE html>

<html>

<head>

    <title>Buku Hehe - Login</title>
    <style> 
        .form-container 
        {
            width: 500px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            margin: 12% auto;
            padding: 20px;
            max-width: 400px;
        }
        .input-box 
        {
            margin: 30px auto;
            height: 45px;
            width: 100%;
            padding: 10px;
            border: 1px solid #dddfe2;
            border-radius: 8px;
            color: #1d2129;
        }
        .btn-login 
        {
            margin: 10px auto 20px;
            width: 100%;
            background-color: #68FAFF;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 10px 0;
            color: #000000;
            font-weight: 700;
        }
    </style>
   
</head>

<body>

    <div>
        <h1 style="margin-top: 150px; text-align: center;">Login Guest</h1>
    </div>

    <!-- menampilkan isi validasi -->
    <?php echo validation_errors(); ?>
    <!-- menampilkan isi validasi -->

    <form action="<?php echo base_url('loginGuest/login_action'); ?>" method="post">
        <div class="form-container" style="margin-top: 30px;">
            <div class="input-box">
                <input style="border: none; width: 100%;" type="text" name="username" placeholder="Username">
            </div>
            <div class="input-box">
                <input style="border: none; width: 100%;" type="password" name="password" placeholder="Password">
            </div>
            <button class="btn-login" value="login">Login</button>
        </div>
    </form>

</body>

</html
