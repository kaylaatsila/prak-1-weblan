<a href="/create" type="button" class="btn btn-dark my-3">Create</a>

<table class="table my-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NPM</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Dibuat pada</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php $no = 1;
        foreach ($mahasiswa as $mhs) :
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $mhs['npm'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['alamat'] ?></td>
                <td><?= $mhs['created_at'] ?></td>
                <td>
                    <div class="d-flex">
                        <a href="/edit/<?= $mhs['id'] ?>" type="button" class="btn btn-dark btn-sm mx-1">Edit</a>
                        <form method="POST" action="/delete/<?= $mhs['id'] ?>">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" name="submit" class="btn btn-dark btn-sm mx-1">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php
        endforeach
        ?>
    </tbody>
</table>