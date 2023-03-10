<div class="container">
    <div class="row">
        <div class="col-6">
            <h4>Form Edit Pembayaran</h4>
            <form action="<?= BASEURL ?>/admin_pembayaran/update" method="post">
                <div class="mb-2">
                    <label for="tahun_ajaran">Tahun Ajaran</label>
                    <input type="text" name="tahun_ajaran" class="form-control" value="<?= $data['pembayaran']['tahun_ajaran']; ?>">
                    <input type="hidden" name="id" value="<?= $data['pembayaran']['id']; ?>">
                </div>
                <div class="mb-2">
                    <label for="nominal">nominal</label>
                    <input type="text" name="nominal" class="form-control" value="<?= $data['pembayaran']['nominal']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>