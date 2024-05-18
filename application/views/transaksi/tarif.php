<!-- Begin Page Content -->
<div class="container-fluid">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row-mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Pelanggan<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Data Tarif</h1>
    <div class="row mt-3">
        <div class="col-md-8 mb-2">
            <a href="<?= base_url('transaksi/tambahtarif'); ?>" class="btn btn-primary">Tambah Data Tarif</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg">




            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID Tarif</th>
                        <th scope="col">Daya / VA</th>
                        <th scope="col">Tarif / KWH</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tarif as $t) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['id_tarif']; ?></td>
                            <td><?= $t['daya_per_va']; ?></td>
                            <td><?= $t['tarif_per_kwh']; ?></td>

                            <td>

                                <a href="<?= base_url();  ?>transaksi/edittarif/<?= $t['id']; ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url();  ?>transaksi/hapustarif/<?= $t['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin ingin hapus data?')">Hapus</a>


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