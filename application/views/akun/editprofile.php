<!-- Page Heading -->
<h1 class="h3 ml-4 mb-4 text-gray-800"><?= $judul; ?></h1>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8">
                <?= form_open_multipart('akun/editprofile'); ?>

                <form>
                    <div class="form-group row">
                        <label for="email" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-1 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-1">Gambar</div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>



        </div>
        </form>


















    </div>
</div>






</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->