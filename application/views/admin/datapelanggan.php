<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row mt-3">
        <div class="col-md-8 mb-2">
            <a href="<?= base_url('admin/tambahpelanggan'); ?>" class="btn btn-primary">Tambah Data Pelanggan</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg">




            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">No KWH</th>
                        <th scope="col">ID Tarif</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pelanggan as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['no_telp']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['no_kwh']; ?></td>
                            <td><?= $p['id_tarif']; ?></td>
                            <td>

                                <a href="<?= base_url();  ?>admin/editpelanggan/<?= $p['id_pelanggan']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url();  ?>admin/hapuspelanggan/<?= $p['id_pelanggan']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin hapus data?')">Hapus</a>


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