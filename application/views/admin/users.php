<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row mt-3">
        <div class="col-md-8 mb-2">
            <a href="<?= base_url('admin/tambahuser'); ?>" class="btn btn-primary">Tambah Data User</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg">




            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role ID</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $u) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['role_id']; ?></td>
                            <td><?= $u['is_active']; ?></td>
                            <td>

                                <a href="<?= base_url();  ?>admin/edituser/<?= $u['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url();  ?>admin/hapususer/<?= $u['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin hapus data?')">Hapus</a>


                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>


</div>
</div>
<!-- End of Main Content -->