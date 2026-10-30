<?php

//panggil file
require('./Praktikum1.php');

use Pbo\Marketplace\Produk;

//object
$produk = new produk('p0001','Laptop', 10000000 , 5 );


//hasil
echo"produk: " .$produk->nama;
echo"<br>";
echo"Harga: Rp." .$produk->harga;
echo"<br>";
echo"stok: " .$produk->stok;
echo"<br>";
echo"Pajak: " .$produk->pajak()."%";
echo"<br>";
echo"<br>";
echo"Total Harga setelah pajak: Rp." .$produk->total();