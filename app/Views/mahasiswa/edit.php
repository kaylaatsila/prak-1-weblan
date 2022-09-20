<form method="POST" action="/update/<?= $id ?>">
    <div class="mb-3">
        <label for="npm" class="form-label">NPM</label>
        <input type="text" class="form-control" name="npm" id="npm" aria-describedby="npm" value="<?= $npm ?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama" value="<?= $nama ?>">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="alamat" value="<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-dark">Submit</button>
</form>