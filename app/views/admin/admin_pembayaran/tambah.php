<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Tambah Pembayaran</h4>
            <form action="<?= BASEURL ?>/admin_pembayaran/add" method="post">
                <div class="mb-2">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nominal">nominal</label>
                    <input type="text" name="nominal" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>