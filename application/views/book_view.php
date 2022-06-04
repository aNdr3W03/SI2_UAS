<!DOCTYPE html>
<html>

<head>
    <title>Buku</title>
</head>

<body>

    <center>
        <h2 style="margin-top: 100px;">Daftar Buku </h2>
        <center>
            <table align="center" border="1" style="border-collapse: collapse;">
                <tr style="background: grey; font-weight:bold;align:center">
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Penulis</td>
                    <td colspan="3"></td>
                </tr>

                <?php foreach ($data as $buku) { ?>
                    <tr>
                        <td><?php echo $buku['id_buku']; ?></td>
                        <td><?php echo $buku['nama_buku']; ?></td>
                        <td><?php echo $buku['penulis_buku']; ?></td>
                    </tr>
                <?php } ?>
            </table>

</body>

</html>