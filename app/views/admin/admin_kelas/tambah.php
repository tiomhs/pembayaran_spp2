<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Kelas</h4>
            <form action="<?= BASEURL ?>/admin_kelas/add" method="post">
                <div class="mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                    <input type="text" name="kompetensi_keahlian" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>