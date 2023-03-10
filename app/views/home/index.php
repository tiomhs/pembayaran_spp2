<div class="container">
    <h4 class="">
        Selamat Datang👋.. <?= $data['siswa']['nama']; ?>
    </h4>
    <div class="row mb-4">
        <div class="col text-center">
            <video src="<?= BASEURL ?>/video/intro.mp4" autoplay muted height="250" width="auto"></video>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">History Pembayaran Spp</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tanggal Bayar</th>
                                <th>Bulan Dibayar</th>
                                <th>Tahun Dibayar</th>
                                <th>Nama Petugas</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['transaksi'] as $transaksi): ?>
                            <tr>
                                <td></td>
                                <td><?= $transaksi['tanggal_bayar']; ?></td>
                                <td><?= $transaksi['bulan_dibayar']; ?></td>
                                <td><?= $transaksi['tahun_dibayar']; ?></td>
                                <td><?= $transaksi['petugas_nama']; ?></td>
                                <td><?= $transaksi['nominal']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
