<!-- <?= var_dump($data) ?> -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Siswa</h4>
            <form action="<?= BASEURL ?>/admin_siswa/add" method="post">
                <div class="mb-2">
                    <label for="nisn">nisn</label>
                    <input type="text" name="nisn" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nis">nis</label>
                    <input type="text" name="nis" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nama">nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="telepon">telepon</label>
                    <input type="text" name="telepon" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="pengguna">Kelas</label>
                    <select name="kelas_id" id="pengguna" class="form-control">
                        <?php foreach($data['kelas'] as $kelas): ?>
                            <option value="<?= $kelas['id'] ?>"><?= $kelas['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="pengguna">Pengguna</label>
                    <select name="pengguna_id" id="pengguna" class="form-control">
                        <?php foreach($data['pengguna'] as $pengguna): ?>
                            <option value="<?= $pengguna['id'] ?>"><?= $pengguna['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="pengguna">Pembayaran</label>
                    <select name="pembayaran_id" id="pengguna" class="form-control">
                        <?php foreach($data['pembayaran'] as $pembayaran): ?>
                            <option value="<?= $pembayaran['id'] ?>"><?= $pembayaran['tahun_ajaran']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>