<!DOCTYPE html>
<html>

<head>
    <title>Buku HEHE - Register Admin</title>

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
            margin: 10px auto 20px;
            height: 45px;
            width: 100%;
            padding: 10px;
            border: 1px solid #dddfe2;
            border-radius: 8px;
            color: #1d2129;
        }

        .btn-register 
        {
            margin: 20px auto;
            width: 100%;
            background-color: #6EDCFF;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 10px 0;
            color: #000000;
            font-weight: 700;
        }

        .form-check
        {
            margin-bottom: 20px;
        }

        .form-options p
        {
            margin-bottom: 0;
        }

        .form-options a
        {
            text-decoration: none;
            font-weight: 700;
            color: #6EDCFF;
        }

        .error_msg p
        {
            margin: 0;
        }
    </style>

    <!-- JS -->
    <script>
        function showpass(){
            var x = document.getElementById("formInputPassword");

            if (x.type == "password"){
                x.type = "text";
            }
            else {
                x.type = "password";
            }
        }
    </script>
</head>

<body>
    <div>
        <h1 style="margin-top: 150px; text-align: center;">Registrasi Admin</h1>
    </div>

    <?php echo form_open('regisAdmin/insert'); ?>

    <form action="<?php echo base_url('regisAdmin/insert'); ?>" method="post">
        <div class="form-container" style="margin-top: 30px;">
            <div class="input-box">
                <input style="border: none; width: 100%;" type="text" name="username" value="" <?php echo set_value('username'); ?> placeholder="Nama">
            </div>

            <div class="input-box">
                <input style="border: none; width: 100%;" type="password" name="password" value="" <?php echo set_value('password'); ?> placeholder="Password" id="formInputPassword">
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="showpassCheck" onclick="showpass()">
                <label class="form-check-label" for="showpassCheck" style="height: 18px; vertical-align: middle">
                Tampilkan Password</label>
            </div>

            <?php
                if (validation_errors())
                {
                    echo "<div class='error_msg' style='margin: 20px auto 0; color: red; role: alert'>".validation_errors()."</div>";
                }
            ?>

            <button class="btn-register" type="submit" name="submit">Daftar</button>

            <div class="form-options text-center">
                <p>Sudah punya akun?</p>
                <p><a href="<?php echo base_url() ?>loginGuest">Login di sini</a></p>
            </div>
        </div>
    </form>
</body>

</html>
