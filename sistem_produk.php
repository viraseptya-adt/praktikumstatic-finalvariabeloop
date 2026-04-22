<?php

class Produk {
    public static $jumlahProduk = 0;
    public $namaProduk;
    public $harga;

    public function __construct($nama, $harga) {
        $this->namaProduk = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
        echo "Produk '{$this->namaProduk}' ditambahkan dengan harga Rp{$this->harga}.<br>";
    }
}

class Transaksi {
    // Final method tidak bisa dioverride di child class
    final public function prosesTransaksi($produk) {
        echo "---<br>";
        echo "Memproses transaksi untuk: " . $produk->namaProduk . "<br>";
        echo "Status: Transaksi diproses.<br>";
    }
}

// Simulasi
$p1 = new Produk("Laptop", 15000000);
$p1->tambahProduk();

$p2 = new Produk("Mouse", 200000);
$p2->tambahProduk();

$p3 = new Produk("Keyboard", 500000);
$p3->tambahProduk();

echo "<strong>Total Jenis Produk: " . Produk::$jumlahProduk . "</strong><br>";

// Simulasi Transaksi
$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1);

?>