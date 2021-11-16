<h2>Data Narkotika</h2><br>
<a href="index.php?halaman=tambah_narkotika" class="btn btn-primary">[+] Tambah Narkotika</a><br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Golongan</th>
      <th>Nama</th>
      <th>Kandungan Narkotika</th>
      <th>Dasar Hukum Narkotika</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT * FROM narkotika"); ?>
    <?php while($pecah = $ambil->fetch_assoc()) { ?>
      <tr>
        <td class="text-center"><?php echo $nomor; ?></td>
        <td><?php echo $pecah["golongan_narkotika"]; ?></td>
        <td><?php echo $pecah["nama_narkotika"]; ?></td>
        <td><?php echo $pecah["kandungan_narkotika"]; ?></td>
        <td><?php echo $pecah["dasar_hukum_narkotika"]; ?></td>
        <td class="text-center">
          <a onclick="return confirm('Yakin Hapus Data ini?')" href="index.php?halaman=hapus_narkotika&id=<?php echo $pecah['id_narkotika']; ?>" class="btn btn-danger">Hapus</a>  
          <a href="index.php?halaman=ubah_narkotika&id=<?php echo $pecah['id_narkotika']; ?>" class="btn btn-warning">Ubah</a>
        </td>
      </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>