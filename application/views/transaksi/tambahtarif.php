<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 ml-4 text-gray-800">Form Tambah Data Tarif</h1>

</div>

<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>

<?php endif; ?>




<div class="container-fluid">
    <div class="row mt-8">
        <div class="com lg-8">
            <form action="" method="post">
                <div class="form-group row ml-3">
                    <label for="nama" class="form-label">ID Tarif</label>
                    <input type="text" class="form-control" id="id_tarif" name="id_tarif">

                </div>
                <div class="form-group row ml-3">
                    <label for="no_telp" class="form-label">Daya / VA</label>
                    <input type="text" class="form-control" id="daya_per_va" name="daya_per_va">
                </div>
                <div class="form-group row ml-3">
                    <label for="alamat" class="form-label">Tarif / KWH</label>
                    <input type="text" class="form-control" id="tarif_per_kwh" name="tarif_per_kwh">
                </div>


                <button type="submit" class="btn btn-primary float-right" name="tambah">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
</div>