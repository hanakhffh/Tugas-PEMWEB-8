<?php
	include 'koneksi.php';
?>
<html>
<head>
	<title>Form Pendaftaran Siswa Baru</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h1 class="text-center mb-4">FORMULIR REGISTRASI PESERTA DIDIK </h1>
        <br>
		<form>
			<div class="form-group row">
				<label for="tgl" class="col-sm-3 col-form-label">Tanggal</label>
				<div class="col-sm-9">
					<div class="form-row">
						<div class="col">
							<input type="number" class="form-control" placeholder="Tanggal" min="1" max="31" required>
						</div>
						<div class="col">
							<input type="number" class="form-control" placeholder="Bulan" min="1" max="12" required>
						</div>
						<div class="col">
							<input type="number" class="form-control" placeholder="Tahun" min="1900" max="2023" required>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="jenis_pendaftaran" class="col-sm-3 col-form-label">Jenis Pendaftaran</label>
				<div class="col-sm-9">
					<select class="form-control" id="jenis_pendaftaran" required>
						<option value="">-- Pilih Jenis Pendaftaran --</option>
						<option value="siswa_baru">Siswa Baru</option>
						<option value="pindahan">Pindahan</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="tgl_masuk" class="col-sm-3 col-form-label">Tanggal Masuk Sekolah</label>
				<div class="col-sm-9">
					<input type="date" class="form-control" id="tgl_masuk" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="nis" class="col-sm-3 col-form-label">NIS</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="nis" required>
				</div>
			</div>
			<div class="form-group row">
				<label for="no_peserta_ujian" class="col-sm-3 col-form-label">Nomor Peserta Ujian</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="no_peserta_ujian" required>
					<small class="form-text text-muted">Nomor peserta ujian adalah 20 digit yang tertera dalam sertifikat SKHUN SD.</small>
				</div>
			</div>
			<div class="form-group row">
				<label for="pernah_paud" class="col-sm-3 col-form-label">Apakah Pernah PAUD?</label>
				<div class="col-sm-9">
                <select class="form-control" id="pernah_paud" name="pernah_paud">
					<option value="">-- Pilih --</option>
					<option value="ya">Ya</option>
					<option value="tidak">Tidak</option>
				</select>
			</div>
		</div>
        <div class="form-group row">
		<label for="pernah_tk" class="col-sm-3 col-form-label">Apakah Pernah TK?</label>
		<div class="col-sm-9">
			<select class="form-control" id="pernah_tk" name="pernah_tk">
				<option value="">-- Pilih --</option>
				<option value="ya">Ya</option>
				<option value="tidak">Tidak</option>
			</select>
		</div>
	</div>

	<div class="form-group row">
		<label for="no_seri_skhun" class="col-sm-3 col-form-label">No. Seri SKHUN Sebelumnya</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="no_seri_skhun" name="no_seri_skhun">
		</div>
	</div>

	<div class="form-group row">
		<label for="no_seri_ijazah" class="col-sm-3 col-form-label">No. Seri Ijazah Sebelumnya</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="no_seri_ijazah" name="no_seri_ijazah">
		</div>
	</div>

		<div class="form-group row">
		<label for="hobi" class="col-sm-3 col-form-label">Hobi</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="hobi" name="hobi">
		</div>
	</div>

	<div class="form-group row">
		<label for="cita_cita" class="col-sm-3 col-form-label">Cita-cita</label>
		<div class="col-sm-9">
			<input type="text" class="form-control" id="cita_cita" name="cita_cita">
		</div>
	</div>

	<div class="form-group row">
		<div class="col-sm-9 offset-sm-3">
		<form action="FormDatapribadi.php" method="POST">
  		<button type="submit">Selanjutnya</button>
		</div>
	</div>
</form>
</div>
</body>
</html>
