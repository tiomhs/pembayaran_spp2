<!-- <?= var_dump($_SESSION); ?> -->
<div class="container">
    <h4 class="mt-5">
        Manajemen Petugas
    </h4>
    <a href="<?= BASEURL ?>/admin_petugas/tambah" class="btn btn-primary mb-2">Tambah Petugas</a>
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manajemen Petugas</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>PenggunaId</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['petugas'] as $petugas): ?>
                            <tr>
                                <td></td>
                                <td><?= $petugas['nama']; ?></td>
                                <td><?= $petugas['username']; ?></td>
                                <td>
                                    <a href="<?= BASEURL ?>/admin_petugas/edit/<?= $petugas['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= BASEURL ?>/admin_petugas/delete/<?= $petugas['id']; ?>" class="btn btn-danger">Delete</a>
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