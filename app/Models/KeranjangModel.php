<?php

namespace App\Models;

use CodeIgniter\Model;

class KeranjangModel extends Model
{
    protected $table = "tbl_keranjang";
    protected $primaryKey = 'id_keranjang';
    protected $allowedFields = [
        "id_produk"
    ];
}

?>