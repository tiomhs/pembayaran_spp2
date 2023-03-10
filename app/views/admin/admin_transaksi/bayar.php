<!-- <?= var_dump($data) ?> -->
<div class="container">
    <div class="row">
        <div class="col">
            <!-- data diri -->
            <div class="col-xl-5 col-md-8 mb-4">
                <div class="card shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h4><?= $data['siswa']['nama']; ?></h4>
                                <h6>Nisn : <?= $data['siswa']['nisn']; ?></h6>
                                <h6>Nis : <?= $data['siswa']['nis']; ?></h6>
                                <h6>Telepon : <?= $data['siswa']['telepon']; ?></h6>
                                <h6>Nama Kelas :<?= $data['siswa']['nama_kelas']; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card bayar -->
            <h2>Pembayaran</h2>
            <form action="<?= BASEURL ?>/admin_transaksi/bayar" method="post">
                <div class="row">
                    <input type="hidden" name="petugas_id" value="<?= $_SESSION['id_petugas'] ?>">
                    <input type="hidden" name="siswa_id" value="<?= $data['siswa']['id'] ?>">
                    <input type="hidden" name="pembayaran_id" value="<?= $data['siswa']['pembayaran_id'] ?>">
                    <?php foreach($data['bulan'] as $bulan): ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <?php if(in_array($bulan, $data['bulan_dibayar'])): ?>
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-3 mr-2">
                                                <input type="checkbox" value="<?= $bulan; ?>" disabled>
                                            </div>
                                            <div class="col">
                                                <h5 class="font-weight-bold">Bulan ke-<?= $bulan; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-3 mr-2">
                                                <input type="checkbox" value="<?= $bulan; ?>" name="bulan_dibayar[]">
                                            </div>
                                            <div class="col">
                                                <h5 class="font-weight-bold">Bulan ke-<?= $bulan; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <button type="submit" class="btn btn-primary">Bayar</button>
            </form>
        </div>
    </div>
</div>