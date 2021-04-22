<html>
<head>
	<title>Ubah Data</title>
</head>

<body>
	<a href="/siswa">Home</a>
    <h2>UBAH DATA SISWA</h2>
	<form action="/siswa/update/<?= $siswa['id']; ?>" method="post" name="form1">
	<?= csrf_field(); ?>
		<table width="25%" border="0">
			<tr> 
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan" value="<?= $siswa['nama_depan']; ?>"></td>
			</tr>
			<tr> 
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang" value="<?= $siswa['nama_belakang']; ?>"></td>
			</tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><select name="jenis_kelamin">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>
			<tr> 
				<td>Agama</td>
				<td><input type="text" name="agama" value="<?= $siswa['agama']; ?>"></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><textarea name="alamat" rows="3"><?= $siswa['alamat']; ?></textarea>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="UBAH"></td>
			</tr>
		</table>
	</form>
</body>
</html>