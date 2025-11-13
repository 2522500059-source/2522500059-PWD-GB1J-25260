 <section id="IPK">
        <?php 
           $namamatkul1='Algoritma dan Stuktur Data';
        $sksmatkul1='4';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Agama';
        $sksmatkul2='2';
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
        $nilaihadir4='100';
        $nilaitugas4='90';
        $nilaiuts4='75';
        $nilaiuas4='80';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='69';
        $nilaitugas5='80';
        $nilaiuts5='90';
        $nilaiuas5='100';

        $nilaiAkhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiuas1);
        $nilaiAkhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiuas2);
        $nilaiAkhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiuas3);
        $nilaiAkhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiuas4);
        $nilaiAkhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiuas5);

        if ($nilaihadir1 < 70){
            $grade1="E";
            $mutul="0.00";
            $status1="Gagal";
        } else {
            if ($nilaiAkhir1>=91){
                $grade1="A";
                $mutu1=4.00;
                $status1="Lulus";
            } else if
            ($nilaiAkhir1>=81){
                $grade1="A-";
                $mutu1=3.70;
                $status1="Lulus";
            } elseif
            ($nilaiAkhir1>=76){
                $grade1="B+";
                $mutu1=3.30;
                $status1="Lulus";
            } elseif
            ($nilaiAkhir1>=71){
                $grade1="B";
                $mutu1=3.00;
                $status1="Lulus";
            } elseif 
            ($nilaiAkhir1>=66){
                $grade1="B-";
                $mutu1=2.70;
                $status1="Lulus";
            } elseif 
            ($nilaiAkhir1>=61){
                $grade1="C+";
                $mutu1=2.30;
                $status1="Lulus";
            } elseif 
            ($nilaiAkhir1>=56){
                $grade1="C";
                $mutu1=2.00;
                $status1="Lulus";
            } elseif 
            ($nilaiAkhir1>=51){
                $grade1="C-";
                $mutu1=1.70;
                $status1="Lulus";
            } elseif 
            ($nilaiAkhir1>=36){
                $grade1="D";
                $mutu1=1.00;
                $status1="Gagal";
            } elseif
            ($nilaiAkhir1>=0){
                $grade1="E";
                $mutu1=0.00;
                $status1="Gagal";
            }
        }

        if ($nilaihadir2 < 70){ 
            $grade2="E";
            $mutu2="0.00";
            $status2="Gagal";
        } else {
            if ($nilaiAkhir2>=91){
                $grade2="A";
                $mutu2=4.00;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=81){
                $grade2="A-";
                $mutu2=3.70;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=76){
                $grade2="B+";
                $mutu2=3.30;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=71){
                $grade2="B";
                $mutu2=3.00;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=66){
                $grade2="B-";
                $mutu2=2.70;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=61){
                $grade2="C+";
                $mutu2=2.30;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=56){
                $grade2="C";
                $mutu2=2.00;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=51){
                $grade2="C-";
                $mutu2=1.70;
                $status2="Lulus";
            } elseif 
            ($nilaiAkhir2>=36){
                $grade2="D";
                $mutu2=1.00;
                $status2="Gagal";
            } elseif 
            ($nilaiAkhir2>=0){
                $grade2="E";
                $mutu2=0.00;
                $status2="Gagal";
            }
        }

        if ($nilaihadir3 < 70){ 
            $grade3 = "E";
            $mutu3 = 0.00;
            $status3 = "Gagal";
        } else {
            if ($nilaiAkhir3 >= 91) {
                $grade3 = "A"; 
                $mutu3 = 4.00; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 81) {
                $grade3 = "A-"; 
                $mutu3 = 3.70; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 76) {
                $grade3 = "B+"; 
                $mutu3 = 3.30; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 71) {
                $grade3 = "B"; 
                $mutu3 = 3.00; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 66) {
                $grade3 = "B-"; 
                $mutu3 = 2.70; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 61) {
                $grade3 = "C+"; 
                $mutu3 = 2.30; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 56) {
                $grade3 = "C"; 
                $mutu3 = 2.00; 
                $status3 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 51) {
                $grade3 = "C-"; 
                $mutu3 = 1.70; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir3 >= 36) {
                $grade3 = "D"; 
                $mutu3 = 1.00; 
                $status5 = "Gagal";
            } elseif 
            ($nilaiAkhir3>= 0) { 
                $grade3 = "E"; 
                $mutu3 = 0.00; 
                $status3 = "Gagal";
            }
        }

        if ($nilaihadir4 < 70){ 
            $grade4 = "E";
            $mutu4 = 0.00;
            $status4 = "Gagal";
        } else {
            if ($nilaiAkhir4 >= 91) {
                $grade4 = "A"; 
                $mutu4 = 4.00; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 81) {
                $grade4 = "A-"; 
                $mutu4 = 3.70; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 76) {
                $grade4 = "B+"; 
                $mutu4 = 3.30; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 71) {
                $grade4 = "B"; 
                $mutu4 = 3.00; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 66) {
                $grade4 = "B-"; 
                $mutu4 = 2.70; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 61) {
                $grade4 = "C+"; 
                $mutu4 = 2.30; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 56) {
                $grade4 = "C"; 
                $mutu4 = 2.00; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 51) {
                $grade4 = "C-"; 
                $mutu4 = 1.70; 
                $status4 = "Lulus";
            } elseif 
            ($nilaiAkhir4 >= 36) {
                $grade4 = "D"; 
                $mutu4 = 1.00; 
                $status4 = "Gagal";
            } elseif 
            ($nilaiAkhir4>=0) {
                $grade4 = "E"; 
                $mutu4 = 0.00; 
                $status4 = "Gagal";
            }
        }

        if ($nilaihadir5 < 70){ 
            $grade5 = "E";
            $mutu5 = 0.00;
            $status5 = "Gagal";
        } else {
            if ($nilaiAkhir5 >= 91) {
                $grade5 = "A"; 
                $mutu5 = 4.00; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 81) {
                $grade5 = "A-"; 
                $mutu5 = 3.70; 
                $status5 = "Lulus";
            } elseif
            ($nilaiAkhir5 >= 76) {
                $grade5 = "B+"; 
                $mutu5 = 3.30; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 71) {
                $grade5 = "B"; 
                $mutu5 = 3.00; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 66) {
                $grade5 = "B-"; 
                $mutu5 = 2.70; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 61) {
                $grade5 = "C+"; 
                $mutu5 = 2.30; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 56) {
                $grade5 = "C"; 
                $mutu5 = 2.00; $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 51) {
                $grade5 = "C-"; 
                $mutu5 = 1.70; 
                $status5 = "Lulus";
            } elseif 
            ($nilaiAkhir5 >= 36) {
                $grade5 = "D"; 
                $mutu5 = 1.00; 
                $status5 = "Gagal";
            } elseif 
            ($nilaiAkhir5>= 0) {
                $grade5 = "E"; 
                $mutu5 = 0.00; 
                $status5 = "Gagal";
            }
        }
        
      
        $bobot1=$mutu1 * $sksmatkul1;
        $bobot2=$mutu2 * $sksmatkul2;
        $bobot3=$mutu3 * $sksmatkul3;
        $bobot4=$mutu4 * $sksmatkul4;
        $bobot5=$mutu5 * $sksmatkul5;

        $totalbobot= $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;  
        $totalsks= $sksmatkul1 + $sksmatkul2 + $sksmatkul3 + $sksmatkul4 + $sksmatkul5;
        $ipk= $totalbobot/$totalsks;
        ?>
     
      ?>
  <h2>Tentang Saya</h2>
  <p><strong>NIM:</strong>
    <?php
        echo $NIM;
        ?>
  </p>
  <p><strong>Nama Lengkap:</strong>
    <?php
        echo $Nama;
        ?> &#128526;
  </p>
  <p><strong>Tempat Lahir:</strong> Pangkalpinang</p>
  <p><strong>Tanggal Lahir:</strong> 1 Januari 2000</p>
  <p><strong>Hobi:</strong> Memasak, coding, dan bermain musik &#127926;</p>
  <p><strong>Pasangan:</strong> Belum ada &hearts;</p>
  <p><strong>Pekerjaan:</strong> Dosen di ISB Atma Luhur &copy; 2025</p>
  <p><strong>Nama Orang Tua:</strong> Bapak Setiawan dan Ibu Maria</p>
  <p><strong>Nama Kakak:</strong> Antonius Setiawan</p>
  <p><strong>Nama Adik:</strong> Christina Setiawan</p>
</section>