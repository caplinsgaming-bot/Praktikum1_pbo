<?php

class produk {
    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;
    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK * 100;
    }
    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}
//  objek
$produk = new produk();
$produk->kode = 'p0001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = '5';


//hasil
echo"produk: Rp." .$produk->nama;
echo"<br>";
echo"Harga: Rp." .$produk->harga;
echo"<br>";
echo"stok: Rp." .$produk->stok;
echo"<br>";
echo"Pajak: Rp." .$produk->pajak()."%";
echo"<br>";
echo"<br>";
echo"Total Harga setelah pajak: Rp." .$produk->total();