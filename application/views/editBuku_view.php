<!DOCTYPE html>
<html>

<head>
    <title>Form Edit</title>
</head>

<body>
    <center>
        <h2 style="margin-top: 120px;">Edit Buku</h2>
    </center>

    <div class="container-sm mt-5 mb-5">
        <div class="card">
            <div class="card-header" style="background-color: #6EDCFF">Edit Buku</div>

            <div class="card-body">
                <form method="post" action="<?php echo base_url('admin/update_data'); ?>" id="inputForm">
                    <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">

                    <div class="form-group row mb-3">
                        <label for="object" class="col-sm-3">Nama Buku</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_buku" class="form-control" value="<?php echo $nama_buku; ?>">
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="object" class="col-sm-3">Penulis Buku</label>
                        <div class="col-sm-9">
                            <input type="text" name="penulis_buku" class="form-control" value="<?php echo $penulis_buku; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="<?php echo base_url()?>admin" class="btn btn-secondary me-md-2">Kembali</a>
                            <input class="btn btn-danger me-md-2" type="reset" value="Reset">
                            <input class="btn btn-success" type="submit" name="submit"  value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
