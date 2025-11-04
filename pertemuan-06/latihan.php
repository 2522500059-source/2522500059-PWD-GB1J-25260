<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP Dasar</title>
    </head>
    <body>
        <h1><?php echo "Halo, Dunia PHP!"; ?></h1>
        <?php
        $nama = "Yohanes";
        $umur = 25;
        $tinggi = 1.75;
        $aktif = true;
        echo "Nama: $nama <br>";
        echo "Umur: $umur tahun <br>";
        echo "Tinggi: $tinggi meter <br>";
        echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";
        var_dump($nama);
        var_dump($umur);
        var_dump($tinggi);
        var_dump($aktif);
        ?>
        
    </body>
</html>