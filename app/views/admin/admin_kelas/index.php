<div class="container">
    <?php Flasher::flash(); ?>
    <h4 class="mt-5">
        Manajemen Kelas
    </h4>
    <a href="<?= BASEURL ?>/admin_kelas/tambah" class="btn btn-primary mb-2">Tambah Kelas</a>
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
                                <th>Nama</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['kelas'] as $kelas): ?>
                            <tr>
                                <td></td>
                                <td><?= $kelas['nama']; ?></td>
                                <td><?= $kelas['kompetensi_keahlian']; ?></td>
                                <td>
                                    <a href="<?= BASEURL ?>/admin_kelas/edit/<?= $kelas['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= BASEURL ?>/admin_kelas/delete/<?= $kelas['id']; ?>" class="btn btn-danger" onclick="return confirm('yakin?')">Delete</a>
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