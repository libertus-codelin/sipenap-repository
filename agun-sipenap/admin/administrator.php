<h2>Data Administrator</h2><br>
<a href="index.php?halaman=tambah_admin" class="btn btn-primary">[+] Tambah Administator</a><br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th class="text-center">No</th>
      <th>Nama Admin</th>
      <th>Satker</th>
      <th>Username</th>
      <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php $ambil = $koneksi->query("SELECT id_admin, nama_admin, satker_admin, username_admin FROM admin") ?>
    <?php while( $pecah = $ambil->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $nomor; ?></td>
      <td><?php echo $pecah["nama_admin"]; ?></td>
      <td><?php echo $pecah["satker_admin"]; ?></td>
      <td><?php echo $pecah["username_admin"]; ?></td>
      <td class="text-center">
        <a onclick="return confirm('Yakin akan menghapus data ini?')" href="index.php?halaman=hapus_admin&id=<?php echo $pecah['id_admin']; ?>" class="btn btn-danger">Hapus</a>
        <a href="index.php?halaman=ubah_admin&id=<?php echo $pecah['id_admin']; ?>" class="btn btn-warning">Ubah</a>
      </td>
    </tr>
    <?php $nomor++; ?>
    <?php } ?>
  </tbody>
</table>