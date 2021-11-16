<h2>Form Ubah Narkotika</h2><br>

<?php 
	$ambil = $koneksi->query("SELECT * FROM narkotika WHERE id_narkotika='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
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
		<label for="nama">Nama Narkotika</label>
		<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama_narkotika']; ?>" placeholder="Masukkan nama anda" required>
	</div>
	<div class="form-group">
		<label for="kandungan">Kandungan Narkotika</label>
		<textarea name="kandungan" class="form-control" rows="10" id="kandungan" placeholder="Masukkan kandungan narkotika" required><?php echo $pecah['kandungan_narkotika']; ?></textarea>
	</div>
	<div class="form-group">
		<label for="hukum">Dasar Hukum Narkotika</label>
		<textarea name="hukum" class="form-control" rows="10" id="hukum" placeholder="Masukkan ketentuan hukum narkotika" required><?php echo $pecah['dasar_hukum_narkotika']; ?></textarea>
	</div>
	<div class="form-group">
		<button name="ubah" class="btn btn-primary">Ubah</button>
		<a class="btn btn-success" href="index.php?halaman=narkotika">Batal</a>
	</div>
</form>

<?php 
	if (isset($_POST['ubah'])) 
	{
		$koneksi->query("UPDATE narkotika SET golongan_narkotika='$_POST[golongan]', 
			nama_narkotika='$_POST[nama]', kandungan_narkotika='$_POST[kandungan]',
			dasar_hukum_narkotika='$_POST[hukum]' WHERE id_narkotika='$_GET[id]'");

		echo "<script>alert('Data berhasil diubah');</script>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=narkotika'>";
	}
?>