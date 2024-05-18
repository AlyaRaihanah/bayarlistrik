<!-- Page Heading -->
<h1 class="h3 ml-4 text-gray-800"><?= $judul; ?></h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">

</div>

<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>

<?php endif; ?>




<div class="container-fluid">
    <div class="row mt-8">
        <div class="com lg-8">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pelanggan['id_pelanggan']; ?>">
                <div class="form-group row ml-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $pelanggan['nama']; ?>">

                </div>
                <div class="form-group row ml-3">
                    <label for="no_telp" class="form-label">No Telp</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= $pelanggan['no_telp']; ?>">
                </div>
                <div class="form-group row ml-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pelanggan['alamat']; ?>">
                </div>
                <div class="form-group row ml-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $pelanggan['email']; ?>">
                </div>
                <div class="form-group row ml-3">
                    <label for="no_kwh" class="form-label">No KWH</label>
                    <input type="text" class="form-control" id="no_kwh" name="no_kwh" value="<?= $pelanggan['no_kwh']; ?>">
                </div>
                <div class="form-group row ml-3">
                    <label for="id_tarif">ID Tarif</label>
                    <select class="form-control" id="id_tarif" name="id_tarif">
                        <?php foreach ($tarif as $t) : ?>
                            <?php if ($t == $pelanggan['id_tarif']) : ?>
                                <option value="<?= $t['id_tarif']; ?>" selected><?= $t['id_tarif']; ?></option>
                            <?php else : ?>
                                <option value="<?= $t['id_tarif']; ?>"><?= $t['id_tarif']; ?></option>
                            <?php endif ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="post" class="btn btn-primary float-right" name="edit">Edit Data</button>
            </form>
        </div>
    </div>
</div>
</div>