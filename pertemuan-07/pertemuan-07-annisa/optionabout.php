<!DOCTYPE html>
<html>
<head>
    <title>Profil Pilihan</title>
</head>
<body>
    <h2>Pilih Profil yang Ingin Ditampilkan</h2>
    <form method="POST">
        <select name="pilihan">
            <option value="">-- Pilih Profil --</option>
            <option value="gresia">Gresia Dwisartika</option>
            <option value="annisa">Annisa</option>
        </select>
        <button type="submit">Tampilkan</button>
    </form>

    <hr>

    <section id="about">
        <?php
        $gresia = [
            "nim" => "2522500000",
            "nama" => "Gresia Dwisartika",
            "tempatlahir" => "Pangkalpinang",
            "tanggallahir" => "29 April 2005",
            "hoby" => "Bermain Voly",
            "pasangan" => "Sudah punya",
            "pekerjaan" => "Kasir Indomart",
            "namaortu" => "Bapak Suryanto dan Ibuk yuli",
            "namakakak" => "Rudiah",
            "namaadik" => "Siti Aisyah"
        ];

        $annisa = [
            "nim" => "2522500059",
            "nama" => "Annisa",
            "tempatlahir" => "Pangkalpinang",
            "tanggallahir" => "07 Juli 2005",
            "hoby" => "Membaca dan suka jajan",
            "pasangan" => "Tidak Punya",
            "pekerjaan" => "PHL Polda Babel",
            "namaortu" => "Bapak Yadi dan Ibuk Maya Listiyana",
            "namakakak" => "Tidak Punya",
            "namaadik" => "Adik Laki2 M.Raifan Prayoga dan Adik pr Farzana Humaira"
        ];

        if (isset($_POST["pilihan"]) && $_POST["pilihan"] != "") {
            $pilihan = $_POST["pilihan"];

            if ($pilihan == "gresia") {
                $data = $gresia;
            } elseif ($pilihan == "annisa") {
                $data = $annisa;
            } else {
                $data = null;
            }

            if ($data) {
                echo "<h2>Data Profil: " . $data["nama"] . "</h2>";
                echo "<p><strong>NIM:</strong> " . $data["nim"] . "</p>";
                echo "<p><strong>Nama:</strong> " . $data["nama"] . "</p>";
                echo "<p><strong>Tempat Lahir:</strong> " . $data["tempatlahir"] . "</p>";
                echo "<p><strong>Tanggal Lahir:</strong> " . $data["tanggallahir"] . "</p>";
                echo "<p><strong>Hobi:</strong> " . $data["hoby"] . "</p>";
                echo "<p><strong>Pasangan:</strong> " . $data["pasangan"] . "</p>";
                echo "<p><strong>Pekerjaan:</strong> " . $data["pekerjaan"] . "</p>";
                echo "<p><strong>Nama Ortu:</strong> " . $data["namaortu"] . "</p>";
                echo "<p><strong>Nama Kakak:</strong> " . $data["namakakak"] . "</p>";
                echo "<p><strong>Nama Adik:</strong> " . $data["namaadik"] . "</p>";
            } else {
                echo "<p>Data tidak ditemukan.</p>";
            }
        } else {
            echo "<p>Silakan pilih profil terlebih dahulu di atas.</p>";
        }
        ?>
    </section>
</body>
</html>