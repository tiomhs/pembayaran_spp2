<!-- <?= var_dump($_SESSION); ?> -->
<div class="container">
    <h4 class="mt-5">
        Manajemen Pembaayaran
    </h4>
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
                                <th>Telepon</th>
                                <th>Kelas</th>
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
                                <td><?= $siswa['telepon']; ?></td>
                                <td><?= $siswa['nama_kelas']; ?></td>
                                <td><?= $siswa['tahun_ajaran']; ?></td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                        <a href="<?= BASEURL ?>/admin_transaksi/history/<?= $siswa['id']; ?>" class="btn btn-info">History Pembayaran</a>
                                        </div>
                                        <div class="col-6">
                                        <a href="<?= BASEURL ?>/admin_transaksi/bayar/<?= $siswa['id']; ?>" class="btn btn-primary">Bayar Spp</a>
                                        </div>
                                    </div>
                                    
                                    
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