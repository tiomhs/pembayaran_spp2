<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Kelas</h4>
            <form action="<?= BASEURL ?>/admin_kelas/update" method="post">
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $data['kelas']['id'] ?>">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?= $data['kelas']['nama']; ?>">
                </div>
                <div class="mb-2">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <input type="text" name="kompetensi_keahlian" class="form-control" value="<?= $data['kelas']['kompetensi_keahlian']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>