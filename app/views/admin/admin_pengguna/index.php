<div class="container">
    <h4 class="mt-5">
        Manajemen Pengguna
    </h4>
    <a href="<?= BASEURL ?>/admin_pengguna/tambah" class="btn btn-primary mb-2">Tambah Pengguna</a>
    <div class="row">
        <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Manajemen Pengguna</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data['pengguna'] as $pengguna): ?>
                            <tr>
                                <td></td>
                                <td><?= $pengguna['username']; ?></td>
                                <td><?= $pengguna['password']; ?></td>
                                <td>
                                    <?php
                                        if($pengguna['role'] == 0){
                                            echo "admin";
                                        }elseif ($pengguna['role'] == 1) {
                                            echo "petugas";
                                        }else {
                                            echo "siswa";
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= BASEURL ?>/admin_pengguna/edit/<?= $pengguna['id']; ?>" class="btn btn-info">Edit</a>
                                    <a href="<?= BASEURL ?>/admin_pengguna/delete/<?= $pengguna['id']; ?>" class="btn btn-danger">Delete</a>
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