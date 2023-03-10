<!-- <?= var_dump($data); ?> -->
<div class="container">
    <h4 class="mt-5">
        History Pembayaran
    </h4>
    <a href="<?= BASEURL ?>/admin_transaksi/add/<?= $data['siswa']; ?>" class="btn btn-primary mb-2">Tambah Pembayaran</a>
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
                                <th>Nama</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Dibayar</th>
                                <th>Tahun Dibayar</th>
                                <th>Nama Petugas</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['history'] as $history): ?>
                            <tr>
                                <td></td>
                                <td><?= $history['nama']; ?></td>
                                <td><?= $history['tanggal_bayar']; ?></td>
                                <td><?= $history['bulan_dibayar']; ?></td>
                                <td><?= $history['tahun_dibayar']; ?></td>
                                <td><?= $history['petugas_nama']; ?></td>
                                <td><?= $history['nominal']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>