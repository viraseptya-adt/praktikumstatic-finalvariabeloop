<?php

class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        return $a / $b;
    }

    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

// Logika sederhana untuk menangkap input HTML
$hasil = "";
if (isset($_POST['hitung'])) {
    $sisi = $_POST['sisi'];
    $hasil = Matematika::luasPersegi($sisi);
}
?>

<form method="post">
    <label>Masukkan Sisi Persegi:</label>
    <input type="number" name="sisi" required>
    <button type="submit" name="hitung">Hitung Luas</button>
</form>

<?php
if ($hasil !== "") {
    echo "Luas Persegi dengan sisi tersebut adalah: " . $hasil . "<br><br>";
}

echo "Contoh Operasi Statis Lainnya:<br>";
echo "4 x 5 = " . Matematika::kali(4, 5) . "<br>";
echo "10 / 2 = " . Matematika::bagi(10, 2) . "<br>";
?>