<!DOCTYPE html>
<html>
    <head>
        <title>Data Siswa</title>
    </head>
    <body>
        <?php if(session()->getFlashdata('pesan')) :  ?>
            <?= session()->getFlashdata('pesan'); ?>
        <?php endif;  ?>
        <h1>DATA SISWA</h1>
        <a href="/siswa/create">TAMBAH</a>
        <table>
            <thead>
                <tr>
                    <th>NAMA DEPAN</th>
                    <th>NAMA BELAKANG</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
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
                    <td>
                    <a href="/siswa/edit/<?= $s['id']; ?>"><button>EDIT</button></a>
                    <a href="/siswa/delete/<?= $s['id']; ?>"><button onclick="confirm('yakin mau dihapus?')">HAPUS</button></a>
                    <td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>


