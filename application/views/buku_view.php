<!DOCTYPE html>
<html>

<head>
    <title>Buku Hehe - Daftar Buku</title>

    <style>
        .table-container {
            padding: 0;
            margin: 30px 25%;
        }

        @media only screen and (max-width: 1000px) {
            .table-container {
                padding: 0;
                margin: 30px 100px;
            }
        }
    </style>
</head>

<body>
    <center>
        <h2 style="margin-top: 120px;">Daftar Buku</h2>

        <div class="table-container">
            <table class="table table-info table-striped table-hover" style="vertical-align: middle">
                <thead>
                    <tr style="text-align: center">
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $buku) { ?>
                        <tr>
                            <td style="text-align: center"><?php echo $buku['id_buku']; ?></td>
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