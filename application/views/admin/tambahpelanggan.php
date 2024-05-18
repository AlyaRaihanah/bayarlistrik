<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 ml-4 text-gray-800"><?= $judul; ?></h1>

</div>

<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>

<?php endif; ?>




<div class="container-fluid">
    <div class="row mt-8">
        <div class="com lg-8">
            <form action="" method="post">
                <div class="form-group row ml-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">

                </div>
                <div class="form-group row ml-3">
                    <label for="no_telp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="form-group row ml-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <div class="form-group row ml-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="form-group row ml-3">
                    <label for="no_kwh" class="form-label">No KWH</label>
                    <input type="text" class="form-control" id="no_kwh" name="no_kwh">
                </div>
                <div class="form-group row ml-3">
                    <label for="id_tarif">ID Tarif</label>
                    <select class="form-control" id="id_tarif" name="id_tarif">
                        <option value="R-1/TR">R-1/TR</option>
                        <option value="R-2/TR">R-2/TR</option>
                        <option value="R-3/TR">R-3/TR</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>