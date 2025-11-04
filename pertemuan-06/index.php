<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">&#9776;
        </button>  
             <nav>
            <ul>
                <li><a href="#home">Beranda</a><br></li>
                <li><a href="#about">Tentang</a><br></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
   </header>
   <main>
    <section id="home">
        <h2>selamat datang</h2>
        <p>ini contoh paragraf HTML</p>
    </section>
    <section id="about">
        <?php
        $nim = "2511500086";
        $NIM = "2522500059";
        $Nim = "";

        $nama = "Dedi Fitrianto";
        $NAMA = "Annisa";
        $Nama = "";

        $tempatlahir = "pangkalpinang";
        $TEMPATLAHIR = "PANGKALPINANG";
        $Tempatlahir = "";

        $tanggallahir = "24 oktober 2006";
        $TANGGALLAHIR = "07 JULI 2005";
        $Tanggallahir = "";

        $hobi = "desain";
        $HOBI = "SUKA MEMBACA DAN SUKA OLAHRAGA";
        $Hobi = "";

        $pasangan = "sudah ada";
        $PASANGAN = "BELUM ADA";
        $Pasangan = "";

        $pekerjaan = "desainer";
        $PEKERJAAN = "PHL POLDA";
        $Pekerjaan = "";

        $namaortu = "Bapak Asri dan Ibuk Pidiatun";
        $NAMAORTU = "BAPAK YADI DAN IBU MAYA LISTIYANA";
        $Namaortu = "";

        $namakakak = "nurita evitarina";
        $NAMAKAKAK = "TIDAK PUNYA";
        $Namakakak = "";

        $namaadik = "tidak punya";
        $NAMAADIK= "ADIK LAKI2= M.RAIFAN PRAYOGA DAN ADIK PR=FARZANA HUMAIRA ";
        $Namaadik = "";


    ?>
        <h2>tentang saya &#128522</h2>
        <p>
            <strong>NIM:</strong>
             <?php
             echo $nim;
             ?>
            </p>

        <p>
            <strong>NAMA LENGKAP:</strong>
            <?php
                echo $nama;
            ?>
            </p>
        <p>
            <strong>TEMPAT LAHIR:</strong>
             <?php
                echo $tempatlahir;
             ?>
            </p>
        <p>
            <strong>TANGGAL LAHIR:</strong>
             <?php
                 echo $tanggallahir;
             ?>
            </p>
        <p> 
            <strong>HOBI:</strong>
            <?php
                  echo $hobi;
            ?>
            </p>

        <p>
            <strong>PASANGAN:</strong>
             <?php
                  echo $pasangan;
             ?>
            </p>
        <p>
            <strong>PEKERJAAN:</strong>
            <?php
                   echo $pekerjaan;
            ?>
            </p>
        <p>
            <strong>NAMA ORANG TUA:</strong>
            <?php
                    echo $namaortu;
            ?>
            </p>
        <p>
            <strong>NAMA KAKAK:</strong>
            <?php
                    echo $namakakak;
            ?>
            </p>

        <p>
            <strong>NAMA ADIK:</strong>
           <?php
                   echo $namaadik;
           ?>
        </p>
    </section>
    <section id="IPK">
        <?php 
            $namamatkul1='Aplikasi Perkantoran';
        $sksmatkul1='3';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Logika Informatika';
        $sksmatkul2='3';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
            $namamatkul3='Pengantar Basis Data';
        $sksmatkul3='3';
        $nilaihadir3='80';
        $nilaitugas3='70';
        $nilaiuts3='70';
        $nilaiuas3='90';
            $namamatkul4='Pengantar Teknologi';
        $sksmatkul4='3';
        $nilaihadir4='90';
        $nilaitugas4='90';
        $nilaiuts4='90';
        $nilaiuas4='90';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='80';
        $nilaitugas5='80';
        $nilaiuts5='80';
        $nilaiuas5='80';

      <h2>kontak kami</h2>
      <form action="" method="GET">
        <label for="txtNama"><span>Nama:</span>
        <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" >
        </label>

        <label for="txtEmail"><span>Email:</span>
        <input type="text" id="txtEmail" email="txtEmail" placeholder="Masukkan email">
        </label>
        
        <label for="txtPesan"><span>Pesan:</span>
        <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..."></textarea>
        <small id="charCount">0/200 karakter</small>
        </label>
        
        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
    </form>
    </section>
   </main>
   <footer>
    <p>&copy; 2025 Annisa [2522500059]</p>
</footer> 
<script src="script.js"></script>
</body>
</html>