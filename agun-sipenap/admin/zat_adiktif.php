<h2>Data Zat-Adiktif</h2><br>
<a href="index.php?halaman=tambah_zat_adiktif" class="btn btn-primary">[+] Tambah Zat-Adiktif</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Golongan</th>
      <th>Nama</th>
      <th>Kandungan Zat-Adiktif</th>
      <th>Dasar Hukum</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM zat_adiktif"); ?>
    <?php while($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td class="text-center"><?php echo $nomor; ?></td>
      <td><?php echo $pecah["golongan_zat_adiktif"] ?></td>
      <td><?php echo $pecah["nama_zat_adiktif"] ?></td>
      <td><?php echo $pecah["kandungan_zat_adiktif"] ?></td>
      <td><?php echo $pecah["dasar_hukum_zat_adiktif"] ?></td>
      <td class="text-center">
        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="index.php?halaman=hapus_zat_adiktif&id=<?php echo $pecah['id_zat_adiktif']; ?>" class="btn btn-danger">Hapus</a>
        <a href="index.php?halaman=ubah_zat_adiktif&id=<?php echo $pecah['id_zat_adiktif']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>