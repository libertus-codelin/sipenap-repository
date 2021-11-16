<h2>Form Tambah Zat-Adiktif</h2><br>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="golongan">Golongan Zat-Adiktif</label>
		<select name="golongan" class="form-control" id="golongan" required="true">
			<option value=""></option>
			<option value="Golongan I">Golongan I</option>
			<option value="Golongan II">Golongan II</option>
			<option value="Golongan III">Golongan II</option>
		</select>
	</div>
	<div class="form-group">
		<label for="nama">Nama Zat-Adiktif</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama zat adiktif" required>
	</div>
	<div class="form-group">
		<label for="kandungan">Kandungan Zat-Adiktif</label>
		<textarea name="kandungan" class="form-control" rows="10" placeholder="Masukkan kandungan zat adiktif" required></textarea>
	</div>
	<div class="form-group">
		<label for="hukum">Dasar Hukum Zat-Adiktif</label>
		<textarea name="hukum" class="form-control" rows="10" placeholder="Masukkan ketentuan hukum zat adiktif" required></textarea>
	</div>
	<div class="form-group">
		<button name="simpan" class="btn btn-primary">Simpan</button>
		<a href="index.php?halaman=zat_adiktif" class="btn btn-success">Kembali</a>
	</div>
</form>

<?php 

	if (isset($_POST['simpan'])) 
	{
		$koneksi->query("INSERT INTO zat_adiktif
			(golongan_zat_adiktif, nama_zat_adiktif, kandungan_zat_adiktif, dasar_hukum_zat_adiktif)
			VALUES ('$_POST[golongan]', '$_POST[nama]', '$_POST[kandungan]', '$_POST[hukum]')");	

		echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=zat_adiktif'>";
	}

?>