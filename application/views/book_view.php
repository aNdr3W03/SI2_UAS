<!DOCTYPE html>
<html>

<head>
    <title>Buku</title>
    <style>
        
    </style>
</head>

<body>
    <center>
        <h2 style="margin-top: 120px;">Daftar Buku</h2>

        <div style="margin: 30px 10%">
            <table class="table table-info table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $buku) { ?>
                    <tr>
                        <td><?php echo $buku['id_buku']; ?></td>
                        <td><?php echo $buku['nama_buku']; ?></td>
                        <td><?php echo $buku['penulis_buku']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>
