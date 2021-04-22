<html>
<head>
	<title>Tambah Data</title>
</head>

<body>
	<a href="/siswa">Home</a>

	<form action="/siswa/save" method="post" name="form1">
    <?= csrf_field(); ?>
		<table width="25%" border="0">
			<tr> 
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan"></td>
			</tr>
			<tr> 
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang"></td>
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
				<td><input type="text" name="agama"></td>
			</tr>
            <tr> 
				<td>Alamat</td>
				<td><textarea name="alamat" rows="3"></textarea>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>