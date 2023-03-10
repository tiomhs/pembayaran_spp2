<!-- <?= var_dump($_SESSION); ?> -->
<div class="container">
    <h4 class="mt-5">
        Manajemen Siswa
    </h4>
    <a href="<?= BASEURL ?>/admin_siswa/tambah" class="btn btn-primary mb-2">Tambah Siswa</a>
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manajemen Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nisn</th>
                                <th>Nis</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Kelas</th>
                                <th>pengguna</th>
                                <th>Angkatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['siswa'] as $siswa): ?>
                            <tr>
                                <td></td>
                                <td><?= $siswa['nisn']; ?></td>
                                <td><?= $siswa['nis']; ?></td>
                                <td><?= $siswa['nama']; ?></td>
                                <td><?= $siswa['alamat']; ?></td>
                                <td><?= $siswa['telepon']; ?></td>
                                <td><?= $siswa['nama_kelas']; ?></td>
                                <td><?= $siswa['username']; ?></td>
                                <td><?= $siswa['tahun_ajaran']; ?></td>
                                <td>
                                    <a href="<?= BASEURL ?>/admin_siswa/edit/<?= $siswa['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= BASEURL ?>/admin_siswa/delete/<?= $siswa['id']; ?>" class="btn btn-danger">Delete</a>
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