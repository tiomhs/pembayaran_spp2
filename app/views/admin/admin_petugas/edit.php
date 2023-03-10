<!-- <?= var_dump($data) ?> -->
<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Edit Petugas</h4>
            <form action="<?= BASEURL ?>/admin_petugas/update" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['petugas']['nama']; ?>">
                    <input type="hidden" value="<?= $data['petugas']['id']; ?>" name="id">
                </div>
                <div class="mb-2">
                    <label for="pengguna">pengguna</label>
                    <select name="pengguna_id" id="pengguna" class="form-control">
                        <?php foreach($data['pengguna'] as $pengguna): ?>
                            <option value="<?= $pengguna['id'] ?>" <?= ($data['petugas']['pengguna_id'] == $pengguna['id']) ? 'selected' : '' ?> ><?= $pengguna['username']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>