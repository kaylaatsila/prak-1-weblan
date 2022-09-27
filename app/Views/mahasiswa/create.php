<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<form method="POST" action="/store">
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <label for="npm" class="form-label">NPM</label>
                <input type="text" class="form-control" name="npm" id="npm" aria-describedby="npm">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>
        </div>

        <div class="col-6">
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-dark"><i class="bi bi-send"></i> Submit</button>
</form>

<?= $this->endSection() ?>