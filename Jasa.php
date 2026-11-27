<?php

namespace Pbo\Marketplace;

require_once('./Praktikum1.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match ($tipe) {
             "virtual"=> "Virtual Account" ,
             "qris"=> "Qris" ,
             default=> "pembayaran hanya bisa va dan qris"
        };
    }

}