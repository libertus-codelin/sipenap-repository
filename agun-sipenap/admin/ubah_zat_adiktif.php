<h2>Form Ubah zat_adiktif</h2><br>

<?php 
	$ambil = $koneksi->query("SELECT * FROM zat_adiktif WHERE id_zat_adiktif='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();

	echo '<pre>';
	print_r($pecah);
	echo '</pre>';
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="golongan">Golongan</label>
		<select class="form-control" name="golongan" id="golongan" required="true">
			<option value=""></option>
			<option value="Golongan I">Golongan I</option>
			<option value="Golongan II">Golongan II</option>
			<option value="Golongan III">Golongan III</option>
		</select>
	</div>
	<div class="form-group">
		<label for="nama">Nama zat_adiktif</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama_zat_adiktif']; ?>" placeholder="Masukkan nama anda" required>
	</div>
	<div class="form-group">
		<label for="kandungan">Kandungan zat_adiktif</label>
		<textarea name="kandungan" class="form-control" rows="10" id="kandungan" placeholder="Masukkan kandungan zat_adiktif" required><?php echo $pecah['kandungan_zat_adiktif']; ?></textarea>
	</div>
	<div class="form-group">
		<label for="hukum">Dasar Hukum zat_adiktif</label>
		<textarea name="hukum" class="form-control" rows="10" id="hukum" placeholder="Masukkan ketentuan hukum zat_adiktif" required><?php echo $pecah['dasar_hukum_zat_adiktif']; ?></textarea>
	</div>
	<div class="form-group">
		<button name="ubah" class="btn btn-primary">Ubah</button>
		<a class="btn btn-success" href="index.php?halaman=zat_adiktif">Batal</a>
	</div>
</form>

<?php 
	if (isset($_POST['ubah'])) 
	{
		$koneksi->query("UPDATE zat_adiktif SET golongan_zat_adiktif='$_POST[golongan]', 
			nama_zat_adiktif='$_POST[nama]', kandungan_zat_adiktif='$_POST[kandungan]',
			dasar_hukum_zat_adiktif='$_POST[hukum]' WHERE id_zat_adiktif='$_GET[id]'");

		echo "<script>alert('Data berhasil diubah');</script>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=zat_adiktif'>";
	}
?>