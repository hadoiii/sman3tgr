<h1>DATA SISWA</h1>
<table>
    <thead>
        <tr>
            <th>NAMA DEPAN</th>
            <th>NAMA BELAKANG</th>
            <th>JENIS KELAMIN</th>
            <th>AGAMA</th>
            <th>ALAMAT</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($siswa as $s) : ?>
        <tr>
            <td><?= $s['nama_depan']; ?></td>
            <td><?= $s['nama_belakang']; ?></td>
            <td><?= $s['jenis_kelamin']; ?></td>
            <td><?= $s['agama']; ?></td>
            <td><?= $s['alamat']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


