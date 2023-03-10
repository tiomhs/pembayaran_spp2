<div class="container">
    <h4 class="mt-5">
        Manajemen Kelas
    </h4>
    <a href="<?= BASEURL ?>/admin_pembayaran/tambah" class="btn btn-primary mb-2">Tambah Pembayaran</a>
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manajemen Kelas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tahun Ajaran</th>
                                <th>Nominal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['pembayaran'] as $pembayaran): ?>
                            <tr>
                                <td></td>
                                <td><?= $pembayaran['tahun_ajaran']; ?></td>
                                <td><?= $pembayaran['nominal']; ?></td>
                                <td>
                                    <a href="<?= BASEURL ?>/admin_pembayaran/edit/<?= $pembayaran['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= BASEURL ?>/admin_pembayaran/delete/<?= $pembayaran['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>