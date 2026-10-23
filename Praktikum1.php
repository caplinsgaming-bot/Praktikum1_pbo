<?php

class produk {
    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;
    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function pajak(){
        return self::PAJAK * 100;
    }
    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }
}
//  objek
$produk = new produk('p0001','Laptop', 10000000 , 5 );


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