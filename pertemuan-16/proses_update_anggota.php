<?php
session_start();
require __DIR__ . '/koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read_biodata.php');
}

#validasi cid wajib angka dan > 0
$cid = filter_input(INPUT_POST, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$cid) {
    $_SESSION['flash_error'] = 'CID Tidak Valid.';
    redirect_ke('read_biodata.php?cid=' . (int)$cid);
}

#ambil dan bersihkan (sanitasi) nilai dari form
$noanggota  = bersihkan($_POST['no_anggota']  ?? '');
$nama  = bersihkan($_POST['nama']  ?? '');
$jabatan= bersihkan($_POST['jabatan'] ?? '');
$tanggal = bersihkan($_POST['tanggal'] ?? '');
$skill = bersihkan($_POST['skill'] ?? '');
$gaji= bersihkan($_POST['gaji'] ?? '');
$nowa = bersihkan($_POST['nowa'] ?? '');
$batalion = bersihkan($_POST['batalion'] ?? '');
$bb = bersihkan($_POST['bb'] ?? '');
$tb = bersihkan($_POST['tb'] ?? '');

#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($noanggota === '') {
    $errors[] = 'No Anggota wajib diisi.';
}
if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
}

if ($jabatan === '') {
    $errors[] = 'Jabatan wajib diisi.';
}

if ($tanggal === '') {
    $errors[] = 'Tanggal wajib diisi.';
}

if ($skill === '') {
    $errors[] = 'Skill wajib diisi.';
}

if ($gaji === '') {
    $errors[] = 'Gaji wajib diisi.';
}
if ($nowa === '') {
    $errors[] = 'No Wa wajib diisi.';
}
if ($batalion === '') {
    $errors[] = 'Batalion wajib diisi.';
}
if ($bb === '') {
    $errors[] = 'Bb wajib diisi.';
}
if ($tb === '') {
    $errors[] = 'Tb wajib diisi.';
}


if (mb_strlen($nama) < 3) {
    $errors[] = 'Nama minimal 3 karakter.';
}

/*
  kondisi di bawah ini hanya dikerjakan jika ada error, 
  simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
  */
if (!empty($errors)) {
    $_SESSION['old_biodata'] = [
        'no_anggota' => $noanggota,
        'nama'  => $nama,
        'jabatan' => $jabatan,
        'tanggal' => $tanggal,
        'skill' => $skill,
        'gaji' => $gaji,
        'nowa' => $nowa,
        'batalion' => $batalion,
        'bb' => $bb,
        'tb' => $tb
    ];

    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('edit_biodata.php?cid=' . (int)$cid);
}

/*
    Prepared statement untuk anti SQL injection.
    menyiapkan query UPDATE dengan prepared statement 
    (WAJIB WHERE cid = ?)
  */
$stmt = mysqli_prepare($conn, "UPDATE tbl_data_anggota
                                SET  cnim             = ?,
    ano_anggota      = ?,
    anama            = ?,
    ajabatan         = ?,
    atanggal         = ?,
    askill           = ?,
    agaji            = ?,
    anowa            = ?,
    abatalion        = ?,
    abb              = ?,
    atb              = ?

                                WHERE cid = ?");
if (!$stmt) {
    #jika gagal prepare, kirim pesan error (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('edit_biodata.php?cid=' . (int)$cid);
}

#bind parameter dan eksekusi (s = string, i = integer)
mysqli_stmt_bind_param(
    $stmt,
    "ssssssssssi",
    $ano_anggota,
    $anama,
    $ajabatan,
    $atanggal,
    $askill,
    $agaji,
    $anowa,
    $abatalion,
    $abb,
    $atb,
    $cid
);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    unset($_SESSION['old_biodata']);
    /*
      Redirect balik ke read.php dan tampilkan info sukses.
    */
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah diperbaharui.';
    redirect_ke('read_biodata.php'); #pola PRG: kembali ke data dan exit()
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old_biodata'] = [
        'no_anggota' => $noangota,
        'nama'  => $nama,
        'jabatan' => $jabatan,
        'tanggal' => $tanggal,
        'skill' => $skill,
        'gaji' => $pasangan,
        'nowa' => $pekerjaan,
        'batalion' => $ortu,
        'bb' => $kakak,
        'tb' => $adik
    ];
    $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
    redirect_ke('edit_biodata.php?cid=' . (int)$cid);
}
#tutup statement
mysqli_stmt_close($stmt);

redirect_ke('edit_biodata.php?cid=' . (int)$cid);
