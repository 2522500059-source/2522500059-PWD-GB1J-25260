<?php
  require_once 'koneksi.php';
  require_once 'fungsi.php';

  /*
    Ambil nilai cid dari GET dan lakukan validasi untuk 
    mengecek cid harus angka dan lebih besar dari 0 (> 0).
    'options' => ['min_range' => 1] artinya cid harus ≥ 1 
    (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
  */
  $cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);
  /*
    Skrip di atas cara penulisan lamanya adalah:
    $cid = $_GET['cid'] ?? '';
    $cid = (int)$cid;

    Cara lama seperti di atas akan mengambil data mentah 
    kemudian validasi dilakukan secara terpisah, sehingga 
    rawan lupa validasi. Untuk input dari GET atau POST, 
    filter_input() lebih disarankan daripada $_GET atau $_POST.
  */

  /*
    Cek apakah $cid bernilai valid:
    Kalau $cid tidak valid, maka jangan lanjutkan proses, 
    kembalikan pengguna ke halaman awal (read.php) sembari 
    mengirim penanda error.
  */
  if (!$cid) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_biodata.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT cid, akode_pengunjung, anama_pengunjung, aalamat_rumah, atanggal_kunjungan, ahobi, aasal_SLTA, 
  apekerjaan, anama_ortu, anama_pacar, anama_mantan
                                      FROM tbl_biodata_pengunjung WHERE cid = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read_biodata.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $cid);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read_biodata.php');
  }

  #Nilai awal (prefill form)
  $kodepen  = $row['akode_pengunjung'] ?? '';
$nama = $row['anama_pengunjung'] ?? '';
$alamat = $row['aalamat_rumah'] ?? '';
$tanggal = $row['atanggal_kunjungan'] ?? '';
$hobi = $row['ahobi'] ?? '';
$asal = $row['aasal_SLTA'] ?? '';
$pekerjaan = $row['apekerjaan'] ?? '';
$nama_ortu = $row['anamaortu'] ?? '';
$nama_pacar = $row['anama_pacar'] ?? '';
$nama_mantan = $row['anama_mantan'] ?? '';

  #Ambil error dan nilai old input kalau ada
 $flash_error = $_SESSION['flash_error'] ?? '';
  $old_biodata = $_SESSION['old_biodata'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old_biodata']);
  if (!empty($old_biodata)) {
    $kodepen  = $old_biodata['kode_pengunjung'] ?? $kode_pengunjung;
    $nama = $old_biodata['nama_pengunjung'] ?? $nama_pengunjung;
    $alamat_rumah = $old_biodata['alamat_rumah'] ?? $alamat_pengunjung;
    $tanggal_kunjungan= $old_biodata['tanggal_kunjungan'] ?? $tanggal_kunjungan;
    $hobi = $old_biodata['hobi'] ?? $hobi;
    $asal_SLTA= $old_biodata['asal_SLTA'] ?? $asal_SLTA;
    $pekerjaan = $old_biodata['pekerjaan'] ?? $pekerjaan;
    $nama_ortu = $old_biodata['namaortu'] ?? $nama_ortu;
    $nama_pacar = $old_biodata['nama_pacar'] ?? $nama_pacar;
    $nama_mantan = $old_biodata['nama_mantan'] ?? $nama_mantan;
  }
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <h1>Ini Header</h1>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        &#9776;
      </button>
      <nav>
        <ul>
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="contact">
        <h2>Edit Buku Tamu</h2>
        <?php if (!empty($flash_error)): ?>
          <div style="padding:10px; margin-bottom:10px; 
            background:#f8d7da; color:#721c24; border-radius:6px;">
            <?= $flash_error; ?>
          </div>
        <?php endif; ?>
        <form action="proses_update.php" method="POST">

          <input type="text" name="cid" value="<?= (int)$cid; ?>">

         <label>Kode Pengunjung:
      <input type="text" name="kode_pengunjung" value="<?= htmlspecialchars($kode_pengunjung); ?>" required>
    </label>

    <label>Nama Pengunjung:
      <input type="text" name="nama_pengunjung" value="<?= htmlspecialchars($nama_pengunjung); ?>" required>
    </label>

    <label>Alamat Rumah:
      <input type="text" name="alamat_rumah" value="<?= htmlspecialchars($alamat_pengunjung); ?>" required>
    </label>

    <label>Tanggal Kunjungan:
      <input type="text" name="tanggal_kunjungan" value="<?= htmlspecialchars($tanggal_pengunjung); ?>" required>
    </label>

    <label>Hobi:
      <input type="text" name="hobi" value="<?= htmlspecialchars($hobi); ?>" required>
    </label>

    <label>Asal SLTA:
      <input type="text" name="asal_SLTA" value="<?= htmlspecialchars($asal_SLTA); ?>" required>
    </label>

    <label>Pekerjaan:
      <input type="text" name="pekerjaan" value="<?= htmlspecialchars($pekerjaan); ?>" required>
    </label>

    <label>Nama Orang Tua:
  <input type="text" name="nama_ortu"
         value="<?= htmlspecialchars($nama_ortu); ?>" required>
</label>

    <label>Nama Kakak:
      <input type="text" name="nama_pacar" value="<?= htmlspecialchars($nama_pacar); ?>" required>
    </label>

    <label>Nama Adik:
      <input type="text" name="nama_mantan" value="<?= htmlspecialchars($nama_mantan); ?>" required>
    </label>

          <button type="submit">Kirim</button>
          <button type="reset">Batal</button>
          <a href="read_biodata.php" class="reset">Kembali</a>
        </form>
      </section>
    </main>

    <script src="script.js"></script>
  </body>
</html>