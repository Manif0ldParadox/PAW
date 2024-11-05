
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>QTY</th>
        </tr>
    </thead>
        <?php foreach ($data as $item) : ?>
        <tbody>
        <tr scope="row">
            <td><?= $item['id'] ?></td>
            <td><?= $item['nama'] ?></td>
            <td><?= $item['qty'] ?></td>
        </tr>
        </tbody>
        <?php endforeach ?>
    </table>
