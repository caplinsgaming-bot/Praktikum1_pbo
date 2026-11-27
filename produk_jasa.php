<?php

//panggil file
require('./Jasa.php');

use Pbo\Marketplace\Jasa;

//object
$produk = new Jasa();

$produk->setkode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

//hasil
echo"produk: " .$produk->getNama();
echo"<br>";

echo"Harga: Rp." .$produk->getHarga();
echo"<br>";

echo"stok: " .$produk->getStok();
echo"<br>";

echo"Pajak: " .$produk->pajak()."%";
echo"<br>";

echo"<br>";
echo"Total Harga setelah pajak: Rp." .$produk->total();

echo"<br>";
echo "Metode Pembayaran:". $produk->payment('qris');