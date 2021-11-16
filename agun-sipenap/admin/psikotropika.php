<h2>Data Psikotropika</h2><br>
<a href="index.php?halaman=tambah_psikotropika" class="btn btn-primary">[+] Tambah Psikotropika</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Golongan</th>
      <th>Nama</th>
      <th>Kandungan Psikotropika</th>
      <th>Dasar Hukum</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM psikotropika"); ?>
    <?php while($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td class="text-center"><?php echo $nomor; ?></td>
      <td><?php echo $pecah["golongan_psikotropika"] ?></td>
      <td><?php echo $pecah["nama_psikotropika"] ?></td>
      <td><?php echo $pecah["kandungan_psikotropika"] ?></td>
      <td><?php echo $pecah["dasar_hukum_psikotropika"] ?></td>
      <td class="text-center">
        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="index.php?halaman=hapus_psikotropika&id=<?php echo $pecah['id_psikotropika']; ?>" class="btn btn-danger">Hapus</a>
        <a href="index.php?halaman=ubah_psikotropika&id=<?php echo $pecah['id_psikotropika']; ?>" class="btn btn-warning">Ubah</a> 
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>