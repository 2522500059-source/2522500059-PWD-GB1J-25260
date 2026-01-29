<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  $sql = "SELECT * FROM tbl_data_anggota ORDER BY cid DESC";
  $q = mysqli_query($conn, $sql);
  if (!$q) {
    die("Query error: " . mysqli_error($conn));
  }
?>

<?php
  $flash_sukses = $_SESSION['flash_sukses'] ?? ''; #jika query sukses
  $flash_error  = $_SESSION['flash_error'] ?? ''; #jika ada error
  #bersihkan session ini
  unset($_SESSION['flash_sukses'], $_SESSION['flash_error']); 
?>

<?php if (!empty($flash_sukses)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#d4edda; color:#155724; border-radius:6px;">
          <?= $flash_sukses; ?>
        </div>
<?php endif; ?>

<?php if (!empty($flash_error)): ?>
        <div style="padding:10px; margin-bottom:10px; 
          background:#f8d7da; color:#721c24; border-radius:6px;">
          <?= $flash_error; ?>
        </div>
<?php endif; ?>

<table border="1" cellpadding="8" cellspacing="0">
  <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>ID</th>
    <th>No_nggota</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Tanggal</th>
    <th>Skill</th>
    <th>Gaji</th> 
    <th>Nowa</th> 
    <th>Batalion</th> 
    <th>Bb</th> 
    <th>Tb</th> 
  </tr>
  <?php $i = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $i++ ?></td>
      <td>
        <a href="edit.php?cid=<?= (int)$row['cid']; ?>">Edit</a>
        <a onclick="return confirm('Hapus <?= htmlspecialchars($row['ano_anggota']); ?>?')" href="proses_delete.php?cid=<?= (int)$row['cid']; ?>">Delete</a>
      </td>
      <td><?= $row['cid']; ?></td>
      <td><?= htmlspecialchars($row['ano_anggota']); ?></td>
      <td><?= htmlspecialchars($row['anama']); ?></td>
      <td><?= htmlspecialchars($row['ajabatan']); ?></td>
      <td><?= htmlspecialchars($row['atanggal']); ?></td>
      <td><?= htmlspecialchars($row['askill']); ?></td>
      <td><?= htmlspecialchars($row['agaji']); ?></td>
      <td><?= htmlspecialchars($row['anowa']); ?></td>
      <td><?= htmlspecialchars($row['abatalion']); ?></td>
      <td><?= htmlspecialchars($row['abb']); ?></td>
      <td><?= htmlspecialchars($row['atb']); ?></td>
      
  <?php endwhile; ?>
</table>