<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kontak</title>
</head>
<body>
	<h1>Tambah Kontak Baru</h1>
	<form action="simpankontak.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jkel" value="Laki-laki" required>Laki-laki
					<input type="radio" name="jkel" value="Perempuan" required>Perempuan
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" rows="3"></textarea></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td>:</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td>:</td>
				<td><textarea name="pesan" rows="5"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button type="submit" name="submit">Simpan</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>

