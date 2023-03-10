<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Pengguna</h4>
            <form action="<?= BASEURL ?>/admin_pengguna/add" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="password">password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control">
                        <option value="0">Admin</option>
                        <option value="1">Petugas</option>
                        <option value="2">Siswa</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>