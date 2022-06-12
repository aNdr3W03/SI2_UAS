<html>

<head>

    <title>Input Data</title>

</head>

<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('validasiPerson'); ?>
    <h4>Nama Orang</h4>

    <?php echo form_error('username'); ?>

    <input type="text" name="username" value="<?php echo set_value('username'); ?>" size="30" />

    <h4>Password</h4>

    <?php echo form_error('password'); ?>

    <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="30" />

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>

</html>