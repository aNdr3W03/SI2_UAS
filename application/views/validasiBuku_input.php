<html>

<head>

    <title>Input Data</title>

</head>

<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('validasiBuku'); ?>
    >
    <h4>Nama Buku</h4>

    <?php echo form_error('nama_buku'); ?>

    <input type="text" name="nama_buku" value="<?php echo set_value('nama_buku'); ?>" size="30" />

    <h4>Penulis Buku</h4>

    <?php echo form_error('penulis_buku'); ?>

    <input type="text" name="penulis_buku" value="<?php echo set_value('penulis_buku'); ?>" size="30" />

    <div><input type="submit" value="Submit" /></div>

    </form>

</body>

</html>