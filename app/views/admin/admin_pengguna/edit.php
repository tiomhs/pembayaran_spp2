<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Pengguna</h4>
            <form action="<?= BASEURL ?>/admin_pengguna/update" method="post">
                <div class="mb-2">
                    <input type="hidden" value="<?= $data['pengguna']['id']; ?>" name="id">
                    <label for="nama">Nama</label>
                    <input type="text" name="username" class="form-control" value="<?= $data['pengguna']['username']; ?>">
                </div>
                <div class="mb-2">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control" value="<?= $data['pengguna']['password']; ?>">
                </div>
                <div class="mb-2">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="0" <?= ($data['pengguna']['role'] == 0 ) ? 'selected' : '' ?> >Admin</option>
                        <option value="1" <?= ($data['pengguna']['role'] == 1 ) ? 'selected' : '' ?> >Petugas</option>
                        <option value="2" <?= ($data['pengguna']['role'] == 2 ) ? 'selected' : '' ?> >Siswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>