<h2>Form Tambah Narkotika</h2><br>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="golongan">Golongan Narkotika:</label>
        <select class="form-control" name="golongan" id="golongan" required="true">
        	<option value=""></option>
            <option value="Golongan I">Golongan I</option>
            <option value="Golongan II">Golongan II</option>
            <option value="Golongan III">Golongan III</option>
        </select>
	</div>
	<div class="form-group">
		<label for="nama">Nama Narkotika</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama narkotika" required="true">
	</div>
	<div class="form-group">
		<label for="kandungan">Kandungan Narkotika</label><br>
		<textarea name="kandungan" class="form-control" rows="10" id="kandungan" placeholder="Masukkan kandungan narkotika" required="true"></textarea>
	</div>
	<div class="form-group">
		<label for="hukum">Dasar Hukum Narkotika</label>
		<textarea name="hukum" class="form-control" rows="10" id="hukum" placeholder="Masukkan kententuan hukum" required="true"></textarea>
	</div>
	<div class="form-group">
		<button class="btn btn-primary" name="simpan">Simpan</button>
		<a href="index.php?halaman=narkotika" class="btn btn-success">Kembali</a>
	</div>
</form>

<?php 
	if (isset($_POST["simpan"])) 
	{

		$koneksi->query("INSERT INTO narkotika 
			(golongan_narkotika, nama_narkotika, kandungan_narkotika, dasar_hukum_narkotika)
			VALUES ('$_POST[golongan]', '$_POST[nama]', '$_POST[kandungan]', '$_POST[hukum]')");

		echo "<div class='alert alert-info'>Data berhasil disimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=narkotika'>";
	}
?>