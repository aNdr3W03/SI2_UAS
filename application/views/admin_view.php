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
        <h2 style="margin-top: 120px;">HALAMAN ADMIN - Daftar Buku</h2>

        <div class="table-container">
            <table class="table table-info table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Penulis</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $buku) { ?>
                        <tr>
                            <td><?php echo $buku['id_buku']; ?></td>
                            <td><?php echo $buku['nama_buku']; ?></td>
                            <td><?php echo $buku['penulis_buku']; ?></td>
                            <td><a href="admin/edit_data/<?= $buku['id_buku']; ?>">Edit</td>
                            <td><a href="admin/delete_data/<?= $buku['id_buku']; ?>">Hapus</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <center> <a href="<?php echo base_url('admin/add_data'); ?>">Tambah Buku</a> </center>
        </div>
    </center>
</body>

</html>